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
Route::get('/mail', function () {
    return view('email');
});

Auth::routes();
Route::get('/register', function(){
	return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/application', 'HomeController@application')->name('application');
Route::post('/application', 'HomeController@storeApplication')->name('application');
Route::get('/tedx-admin', 'HomeController@admin')->middleware('auth');
Route::get('/excel', 'HomeController@excel')->name('excel')->middleware('auth');