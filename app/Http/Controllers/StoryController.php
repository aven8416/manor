<?php

namespace App\Http\Controllers;

use App\Storie;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function execute() {

        if(view()->exists('admin.story')){


            $stories= Storie::all();
            $data= [
                'title'=>'История',
                'stories'=>$stories

            ];


            return   view('admin.story',$data);

        }
    }
}
