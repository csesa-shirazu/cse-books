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




Route::get('/' , 'PageController@getHome')->name('homepage');

Route::get('/ekhtesasi' , 'PageController@getEkhtesasi')->name('ekhtesasi');
Route::get('/umumi' , 'PageController@getUmumi')->name('umumi');

Route::get('book/{slug}' , 'PageController@getSingleBook')->name('pages.singlebook');
Route::resource('add', 'PageController');