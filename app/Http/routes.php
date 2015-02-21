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
    return view('home');
});

Route::get('portfolio',function (){
    return view('pages.portfolio');
});

Route::get('about',function (){
    return view('pages.about');
});

Route::get('contact',function (){
    return view('pages.contact');
});

Route::get('contact-form',function (){
    return view('pages.contact-form');
});
