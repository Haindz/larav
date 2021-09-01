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

Route::get('/', [menampilkanview::class, 'dashboard']);

Route::get('dashboard', [menampilkanview::class, 'dashboard']);

Route::get('icons', [menampilkanview::class, 'icons']);

Route::get('maps', [menampilkanview::class, 'maps']);

Route::get('notifications', [menampilkanview::class, 'notifications']);

Route::get('user', [menampilkanview::class, 'user']);

Route::get('tables', [menampilkanview::class, 'tables']);

Route::get('typography', [menampilkanview::class, 'typography']);

Route::get('upgrade', [menampilkanview::class, 'upgrade']);