<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Review;
use App\Storie;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request ){


        if($request->isMethod('post')) {

            $messages = [

                'required'=> "Поле :attribute обязательно к заполнению",
                'email'=> "Поле :attribute должно соответствовать email адресу"

            ];

            $this->validate($request, [

                'name'=> 'required|max:255',
                'email'=> 'required|email',
                'text'=> 'required'

            ], $messages);

         $data = $request->all();

            $result = Mail::send('site.email',['data'=>$data], function($message) use ($data){

                $mail_admin=env('MAIL_ADMIN');
                $message->from($data['email'],$data['name']);
                $message->to($mail_admin, 'Grandad')->subject('Question');
            });
            //mail
            if ($result = true) {

                return redirect()->route('home')->with('status', 'Сообщение отправлено');
            }


        }

        $pages= Page::all();
        $portfolios=Portfolio::get(array('title', 'subtitle', 'text','image'));
        $reviews=Review::get(array('title', 'text', 'reviewer','address'));
        $stories = Storie::all();
        $links = Link::pluck('name');


        $menu = array();
        foreach ($pages as $page) {
            $item = array('title'=>$page->name,'alias'=>$page->alias);
            array_push($menu,$item);

        }


        foreach ($links as $k=>$link) {

            $video =$link;
        }



        $reviewers = array();
        foreach ($reviews as $review) {
            $item = array('title'=>$review->title,'text'=>$review->text,
                'reviewer'=>$review->reviewer,'address'=>$review->address);
            array_push($reviewers,$item);

        }






        return view('site.index', array(

            'menu'=>$menu,
            'reviewers'=> $reviewers,
            'pages'=>$pages,
            'portfolios'=>$portfolios,
            'reviews'=>$reviews,
            'stories'=>$stories,
            'video'=>$video



        ));
    }
}
