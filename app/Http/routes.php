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
    $view['title'] = 'RaelinaMarie';
    return view('home',$view);
});

Route::get('portfolio',function (){
    $view['title'] = 'Portfolio';
    return view('pages.portfolio',$view);
});
Route::get('projects',function (){
    $view['title'] = 'Projects';
    return view('pages.projects',$view);
});

Route::get('detail01',function (){
    $view['title'] = 'DrawClerk';
    return view('pages.detail-drawclerk',$view);
});
Route::get('detail04',function (){
    $view['title'] = 'title';
    return view('pages.detail-bikesurf',$view);
});
Route::get('detail02',function (){
    $view['title'] = 'title';
    return view('pages.detail-poke',$view);
});
Route::get('detail03',function (){
    $view['title'] = 'title';
    return view('pages.detail-veiledbeauty',$view);
});
Route::get('detail05',function (){
    $view['title'] = 'title';
    return view('pages.detail-themappers',$view);
});
Route::get('detail06',function (){
    $view['title'] = 'title';
    return view('pages.detail-entryletter',$view);
});
Route::get('detail07',function (){
    $view['title'] = 'title';
    return view('pages.detail-themasqline',$view);
});
Route::get('detail08',function (){
    $view['title'] = 'title';
    return view('pages.detail-linda',$view);
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
