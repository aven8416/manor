<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Validator;

class PortfolioEditController extends Controller
{
    public function execute(Portfolio $portfolio, Request $request) {


        if ($request->isMethod('delete')) {

            $portfolio->delete();
            return redirect('admin')->with('status','Изображение успешно удалено');
        }

        if ($request->isMethod('post')) {


            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'

            ];


            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'title' => 'required|max:255',
                'subtitle' => 'required|max:255',
                'text' => 'required'

            ], $messages);

            if($validator->fails()) {

                return redirect()->route('portfolioEdit',['portfolio'=>$input['id']])->withErrors($validator);
            }

            if($request->hasFile('image')) {

                $file =$request->file('image');
                $file->move(public_path() . '/assets/img/img_portfolio',$file->getClientOriginalName());
                $input['image']= $file->getClientOriginalName();
            }
            else {

                $input['image'] = $input['old_image'];
            }

            unset($input['old_image']);

            $portfolio->fill($input);

            if ($portfolio->update()) {

                return redirect('admin')->with('status','Изображение обновлено');
            }

        }

        $old = $portfolio->toArray();
        if (view()->exists('admin.portfolio_edit')) {


            $data =[
                'title'=>'Редактирование изображения - ' . $old['title'],
                'data' => $old

            ];

            return view('admin.portfolio_edit', $data);
        }
    }
}
