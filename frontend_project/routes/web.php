<?php

use App\Http\Controllers\menampilkanview;
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

Route::get('/', [menampilkanview::class, 'template']);

Route::get('partisi.testimoni', [menampilkanview::class, 'testimoni']);

Route::get('partisi.login', [menampilkanview::class, 'login']);

Route::get('partisi.register', [menampilkanview::class, 'register']);

Route::get('partisi.faq', [menampilkanview::class, 'faq']);

Route::get('partisi.info', [menampilkanview::class, 'info']);

Route::get('ml1', [menampilkanview::class, 'ml1']);

Route::get('ml2', [menampilkanview::class, 'ml2']);

Route::get('ml3', [menampilkanview::class, 'ml3']);

Route::get('pubg1', [menampilkanview::class, 'pubg1']);

Route::get('pubg2', [menampilkanview::class, 'pubg2']);

Route::get('pubg3', [menampilkanview::class, 'pubg3']);

Route::get('ff1', [menampilkanview::class, 'ff1']);

Route::get('ff2', [menampilkanview::class, 'ff2']);

Route::get('ff3', [menampilkanview::class, 'ff3']);

Route::get('partisi.forgetpass', [menampilkanview::class, 'forgetpass']);

Route::get('partisi.checkout', [menampilkanview::class, 'checkout']);









//INFOGAME
Route::get('/info', 'InfoGameController@index');
Route::get('/info/create', 'InfoGameController@create');
Route::get('/info/{id}/show', 'InfoGameController@show');
Route::post('/info', 'InfoGameController@store');
Route::post('/update/{id}', 'InfoGameController@update');
Route::post('/delete/{id}', 'InfoGameController@delete');