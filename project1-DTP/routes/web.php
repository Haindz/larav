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
    return view('dashboard');
});
Route::get('homepage', function () {
    return view('homepage');
});
Route::get('rediscache', function () {
    return view('rediscache');
});
Route::get('PUBG', function () {
    return view('PUBG');
});
Route::get('hlogin', function () {
    return view('hlogin');
});
Route::get('alogin', function () {
    return view('alogin');
});
Route::get('FF', function () {
    return view('FF');
});
Route::get('ML', function () {
    return view('ML');
});
Route::get('contactFrom', function () {
    return view('contactFrom');
});
Route::get('payment', function () {
    return view('payment');
});
Route::get('vmerchant', function () {
    return view('vmerchant');
});
Route::get('uvmerchant', function () {
    return view('uvmerchant');
});
Route::get('profil', function () {
    return view('profil');
});
Route::get('setting', function () {
    return view('setting');
});
Route::get('login', function () {
    return view('login');
});
Route::get('edittitle', function () {
    return view('edittitle');
});

Route::get('footerHP', function () {
    return view('footerHP');
});
Route::get('footerHP2', function () {
    return view('footerHP2');
});
Route::get('footerHP3', function () {
    return view('footerHP3');
});
Route::get('Addproduct', function () {
    return view('Addproduct');
});
Route::get('settingproduct', function () {
    return view('settingproduct');
});
Route::get('settingproduct2', function () {
    return view('settingproduct2');
});
Route::get('settingproduct3', function () {
    return view('settingproduct3');
});
Route::get('resetindex3', function () {
    return view('resetindex3');
});
Route::get('resetindex1', function () {
    return view('resetindex1');
});
Route::get('resetindex2', function () {
    return view('resetindex2');
});
Route::get('FAQ', function () {
    return view('FAQ');
});
Route::get('statusfeedback', function () {
    return view('statusfeedback');
});
Route::get('desc', function () {
    return view('desc');
});
Route::get('namamerchant', function () {
    return view('namamerchant');
});
Route::get('namamerchant2', function () {
    return view('namamerchant2');
});
Route::get('namamerchant3', function () {
    return view('namamerchant3');
});
Route::get('buy', function () {
    return view('buy');
});
Route::get('testimoni', function () {
    return view('testimoni');
});