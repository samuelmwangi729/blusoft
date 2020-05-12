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

Route::get('/',
[
    'uses'=>'IndexController@index',
    'as'=>'index.home'
]
);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/lUXpoba1Xm7k5J612UwjzOkFevdSeeWJqPjeKHnfIgOJRUl7jPKhK', 'IndexController@contact')->name('lUXpoba1Xm7k5J612UwjzOkFevdSeeWJqPjeKHnfIgOJRUl7jPKhK');
