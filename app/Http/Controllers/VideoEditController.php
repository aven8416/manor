<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Validator;

class VideoEditController extends Controller
{
    public function execute(Link $video, Request $request) {



        if ($request->isMethod('post')) {


            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'

            ];


            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'name' => 'required|max:255'


            ], $messages);

            if($validator->fails()) {

                return redirect()->route('videoEdit',['video'=>$input['id']])->withErrors($validator);
            }


            $video->fill($input);

            if ($video->update()) {

                return redirect('admin')->with('status','Видео обновлено');
            }

        }

        $old = $video->toArray();
        if (view()->exists('admin.video_edit')) {


            $data =[
                'title'=>'Редактирование ссылки - ' . $old['id'],
                'data' => $old

            ];

            return view('admin.video_edit', $data);
        }
    }
}
