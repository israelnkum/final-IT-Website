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


Route::get('/contact-us','PagesController@contact')->name('contact-us');
Route::get('/', 'FilesController@welcomeIndex');
Route::get('/gallery','FilesController@gallery')->name('gallery');

Route::get('/about-us','FilesController@aboutLectures')->name('about-us');

Route::get('/pastQuestion', 'HndController@store')->name('pastQuestion');

Route::post('/store','HndController@store');
Route::post('/store1','diplomaController@store');