<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Validator;
class ReviewEditController extends Controller
{
    public function execute(Review $review, Request $request) {


        if ($request->isMethod('delete')) {

            $review->delete();
            return redirect('admin')->with('status','Отзыв успешно удален');
        }

        if ($request->isMethod('post')) {


            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'

            ];


            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'title' => 'required|max:255',
                'text' => 'required',
                'reviewer' => 'required|max:255',
                'address' => 'required|max:255'

            ], $messages);

            if($validator->fails()) {

                return redirect()->route('reviewEdit',['review'=>$input['id']])->withErrors($validator);
            }


            $review->fill($input);

            if ($review->update()) {

                return redirect('admin')->with('status','Отзыв обновлен');
            }

        }

        $old =   $review->toArray();
        if (view()->exists('admin.review_edit')) {


            $data =[
                'title'=>'Редактирование отзыва - ' . $old['title'],
                'data' => $old

            ];

            return view('admin.review_edit', $data);
        }
    }
}
