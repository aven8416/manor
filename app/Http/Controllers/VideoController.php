<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function execute() {

        if(view()->exists('admin.video')){


            $links= Link::all();
            $data= [
                'title'=>'Видео',
                'links'=>$links

            ];


            return   view('admin.video',$data);

        }
    }
}
