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

Route::get('/','Frontend\PageController@index');
Route::get('post/{id}','Frontend\PageController@show');

Auth::routes();
Route::get('logout','Auth\LoginController@logout');
Route::view('/admin','backend.layouts.master')->middleware('myware');

Route::get('/home', 'HomeController@index')->name('home');
 // Route::get('/admin',function(){
 // 	return view('backend.layouts.master');
 // });
require 'admin.php';



