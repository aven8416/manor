<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Review;

class IndexController extends Controller
{
    public function execute(Request $request ){

        $pages= Page::all();
        $portfolios=Portfolio::get(array('title', 'subtitle', 'text','image'));
        $reviews=Review::get(array('title', 'text', 'reviewer','address'));


        $menu = array();
        foreach ($pages as $page) {
            $item = array('title'=>$page->name,'alias'=>$page->alias);
            array_push($menu,$item);

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
            '$reviews'=>$reviews
        ));
    }
}
