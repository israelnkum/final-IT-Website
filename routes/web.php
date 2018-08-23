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
    return view('welcome');
});

//Route::get('/gallery', function () {
//    return view('gallery');
//});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/', 'FilesController@welcomeIndex');

Route::get('/gallery','FilesController@gallery');

Route::get('/about-us','FilesController@aboutLectures');

Route::get('/pastQuestion', function () {
    return view('pastQuestion');
});
//Route::post('/store1','PastQuestionController@store1');

Route::post('/store','HndLevel100Controller@store');
Route::post('/store1','diplomaController@store');