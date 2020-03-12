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
Route::post('/abc','PostController@getData');
// Route::post('/abc','PostController@insert');
Route::post('/ab','CustomerController@CustomerDetails');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/frontpage',"welcome");
Route::post('/wel','welcomecontroller@index');

