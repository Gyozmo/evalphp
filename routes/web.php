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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/search', 'ProductController@searchresult');

route::get('/addproduct', 'ProductController@addproduct')->middleware('auth');

route::get('/showproduct', 'ProductController@showproduct');

route::get('/showuser', 'UserController@showuser');

