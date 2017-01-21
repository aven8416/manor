<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Validator;

class PortfolioAddController extends Controller
{
    public function execute(Request $request) {

        if ($request->isMethod('post')) {


            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'




            ];


            $validator= Validator::make($input, [

                'title' => 'required|max:255',
                'subtitle' => 'required',
                'text' => 'required',
                'image' => 'required'

            ],$messages);

            if ($validator->fails()) {
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }
            if ($request->hasFile('image')) {

                $file = $request->file('image');
                $input['image'] = $file->getClientOriginalName();



                        $file->move(public_path() .'/assets/img/img_portfolio' ,$input['image']);



            }
            $portfolio= new Portfolio();
            $portfolio->fill($input);

            if($portfolio->save()) {

                return redirect('admin')->with('status', 'Изображение добавлено');
            }
        }



        if (view()->exists('admin.portfolio_add')) {
            $data = [
                'title' => 'Новое изображение'

            ];

            return view('admin.portfolio_add',$data);
        }

    }
}
