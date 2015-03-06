<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',function (){
    $view['title'] = 'title';
    return view('home',$view);
});

Route::get('portfolio',function (){
    $view['title'] = 'title';
    return view('pages.portfolio',$view);
});

Route::get('detail',function (){
    $view['title'] = 'title';
    return view('pages.detail',$view);
});

Route::get('about',function (){
    $view['title'] = 'title';
    return view('pages.about',$view);
});

Route::get('contact',function (){
    $view['title'] = 'title';
    return view('pages.contact',$view);
});

Route::get('contact-form',function (){
    return view('pages.contact-form');
});
