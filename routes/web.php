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

Route::get("/","TestController@index")->name('welcome');
Route::get("signin","TestController@signinForm");
Route::post("signin","TestController@save")->name('signup_action');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
