<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group([], function() {

    Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
    Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
    Route::auth();
});