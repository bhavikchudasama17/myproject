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
    return view('login1');
});

Route::get('/register1', function () {
    return view('register1');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/dashboard','dashboardcontroller');
Route::resource('/login2','login2controller')->middleware('auth');


