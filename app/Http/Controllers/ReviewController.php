<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function execute() {

        if(view()->exists('admin.review')){


            $reviews= Review::all();
            $data= [
                'title'=>'Отзывы',
                'reviews'=>$reviews

            ];


            return   view('admin.review',$data);

        }
    }
}
