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
//get is a type of request. post is for submitting data. get is for getting data
Route::get('/', function () {
    return view('home');
});

Route::get('/testh2', function () {
    return view('testh2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
}); //->middleware('auth'); use this if you want only authenticated users to come

Route::post('/contact/submit', 'ContactFormController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
