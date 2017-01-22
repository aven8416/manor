<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Validator;

class ReviewAddController extends Controller
{
    public function execute(Request $request) {

        if ($request->isMethod('post')) {


            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',



            ];
            $validator= Validator::make($input, [

                'title' => 'required|max:255',
                'text' => 'required',
                'reviewer' => 'required|max:255',
                'address' => 'required|max:255'

            ],$messages);

            if ($validator->fails()) {
                return redirect()->route('reviewAdd')->withErrors($validator)->withInput();
            }

            $review= new Review();
            $review->fill($input);
            if($review->save()) {

                return redirect('admin')->with('status', 'Отзыв добавлен');
            }
        }



        if (view()->exists('admin.review_add')) {
            $data = [
                'title' => 'Новый отзыв'

            ];

            return view('admin.review_add',$data);
        }

    }
}
