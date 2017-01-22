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

Route::group(['prefix'=>'admin', 'middleware'=> 'auth'], function() {

    //admin
    Route::get('/', function (){
        if (view()->exists('admin.index')) {

            $data = [
                'title'=>'Панель администратора'
            ];
            return view('admin.index',$data);
        }

    });





//admin/pages
    Route:: group(['prefix'=>'pages'],function () {

        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        //admin/pages/add
        Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute','as'=>'pagesAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);
    });
        //admin/portfolios
        Route:: group(['prefix'=>'portfolios'],function () {

            Route::get('/', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
            //admin/portfolios/add
            Route::match(['get','post'],'/add',['uses'=>'PortfolioAddController@execute','as'=>'portfolioAdd']);
            //admin/edit/2
            Route::match(['get','post','delete'],'/edit/{portfolio}',['uses'=>'PortfolioEditController@execute','as'=>'portfolioEdit']);
        });
        //admin/reviews
        Route:: group(['prefix'=>'reviews'],function () {

            Route::get('/', ['uses'=>'ReviewController@execute', 'as'=>'review']);
            //admin/reviews/add
            Route::match(['get','post'],'/add',['uses'=>'ReviewAddController@execute','as'=>'reviewAdd']);
            //admin/edit/2
            Route::match(['get','post','delete'],'/edit/{review}',['uses'=>'ReviewEditController@execute','as'=>'reviewEdit']);
        });
        //admin/stories
        Route:: group(['prefix'=>'stories'],function () {

            Route::get('/', ['uses'=>'StoryController@execute', 'as'=>'story']);
            //admin/stories/add
            Route::match(['get','post'],'/add',['uses'=>'StoryAddController@execute','as'=>'storyAdd']);
            //admin/edit/2
            Route::match(['get','post','delete'],'/edit/{story}',['uses'=>'StoryEditController@execute','as'=>'storyEdit']);

             });
    Route:: group(['prefix'=>'links'],function () {

        Route::get('/', ['uses'=>'VideoController@execute', 'as'=>'video']);
        //admin/stories/add
        Route::match(['get','post'],'/add',['uses'=>'VideoAddController@execute','as'=>'videoAdd']);
        //admin/edit/2
        Route::match(['get','post','delete'],'/edit/{video}',['uses'=>'VideoEditController@execute','as'=>'videoEdit']);

    });


});

Auth::routes();

Route::get('/home', 'HomeController@index');
