<?php

use Illuminate\Support\Facades\Route;

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
// Route::view ('/video' , 'videos' )->middleware('auth');
// Route::view ('/category1' , 'category' )->middleware('auth');


// Videos

Route::get('/videos', 'VideoController@index');
Route::get('/videos/{id}' , 'VideoController@show');
Route::post('/videos' , 'VideoController@store');
Route::post('/videosapprove/{id}' , 'VideoController@approve');
Route::put('/videos/update/{id}' , 'VideoController@update');
Route::delete('/videos/delete/{id}' , 'VideoController@destroy');

//video blade 

Route::get('/video', 'VideoHomeController@index')->middleware('auth');
Route::get('/video/{id}' , 'VideoHomeController@show')->middleware('auth');


// Categoris

// Route::get('/category', 'CategoryController@index');
Route::get('/category1/{id}' , 'CategoryController@show');
Route::post('/category1' , 'CategoryController@store');
// Route::post('/categoryapprove/{id}' , 'CategoryController@approve');
Route::put('/category/update/{id}' , 'CategoryController@update');
Route::delete('/category_delete/{id}' , 'CategoryController@destroy');

//category blade 

Route::get('/category', 'CategoryViewController@index')->middleware('auth');
Route::get('/updateCategory/{id}' , 'CategoryViewController@show')->middleware('auth');
Route::get('/addcategory' , 'CategoryViewController@add')->middleware('auth');

Route::view('header' , 'Admin.Header');