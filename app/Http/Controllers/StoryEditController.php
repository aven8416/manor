<?php

namespace App\Http\Controllers;

use App\Storie;
use Illuminate\Http\Request;
use Validator;

class StoryEditController extends Controller
{
    public function execute(Storie $story, Request $request) {



        if ($request->isMethod('post')) {


            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'

            ];


            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'text' => 'required'


            ], $messages);

            if($validator->fails()) {

                return redirect()->route('storyEdit',['story'=>$input['id']])->withErrors($validator);
            }


            $story->fill($input);

            if ($story->update()) {

                return redirect('admin')->with('status','История обновлена');
            }

        }

        $old = $story->toArray();
        if (view()->exists('admin.story_edit')) {


            $data =[
                'title'=>'Редактирование блока - ' . $old['id'],
                'data' => $old

            ];

            return view('admin.story_edit', $data);
        }
    }
}
