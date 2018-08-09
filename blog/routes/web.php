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
Route::group(['prefix'=>'backend','namespace'=>'Backend','middleware'=>'auth'],function(){
	Route::get('/','BackendController@index')->name('backend');
	require 'category.php';
	
});

Route::get('backend/login.html','Backend\AuthController@login')->name('login');
Route::post('backend/login.html','Backend\AuthController@post_login')->name('login');
Route::get('backend/logout.html','Backend\AuthController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about.html', 'HomeController@about')->name('about');
Route::get('/contact.html', 'HomeController@contact')->name('contact');

// auth route

Route::get('/login.html','AuthController@login')->name('home.login');
Route::post('/login.html','AuthController@post_login')->name('home.login');


Route::get('/register.html','AuthController@register')->name('register');
Route::post('/register.html','AuthController@post_register')->name('register');
