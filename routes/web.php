<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title="Home";return view('index')->with('title',$title);
});
Route::get('/gallery', function () {
    $title="Gallery";  return view('gallery')->with('title',$title);
});
Route::get('/event_list', function () {
    $title="Event List"; return view('event_list')->with('title',$title);
});
Route::get('/about', function () {
    $title="About Us"; return view('about')->with('title',$title);
});
Route::get('/contact', function () {
    $title="Contact Us"; return view('contact')->with('title',$title);
});
Route::post('/contact','ContactsController@contactus');

Route::get('/register1','RegistersController@register1');
Route::get('/event_modelling','RegistersController@event_model');
Route::get('/event_singing','RegistersController@event_sing');
Route::get('/event_details',function(){
return view('/event_details');
});

Route::resource('/register','RegistersController');

Route::get('/campus_ambassador',function(){
    return view('/campus_ambb');

});
Route::post('/campus_ambassador','RegistersController@store1');
