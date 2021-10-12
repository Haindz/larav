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
    return view('template');
});

Route::get('/partisi.testimoni', function () {
    return view('partisi.testimoni');
});

Route::get('/partisi.login', function () {
    return view('partisi.login');
});

Route::get('/partisi.register', function () {
    return view('partisi.register');
});

Route::get('/partisi.faq', function () {
    return view('partisi.faq');
});

Route::get('/partisi.info', function () {
    return view('partisi.info');
});

Route::get('/partisi.forgetpass', function () {
    return view('partisi.forgetpass');
});

Route::get('/partisi.checkout', function () {
    return view('partisi.checkout');
});

//INFOGAME
Route::get('/info', 'InfoGameController@index');
Route::get('/info/create', 'InfoGameController@create');
Route::get('/info/{id}/show', 'InfoGameController@show');
Route::post('/info', 'InfoGameController@store');
Route::post('/update/{id}', 'InfoGameController@update');
Route::post('/delete/{id}', 'InfoGameController@delete');