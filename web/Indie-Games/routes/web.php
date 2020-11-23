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
    return view('IndieGames');
});


Route::get('/logout', 'App\Http\Controllers\AccountController@logout');

//Route::get('/IndieGames', 'App\Http\Controllers\HomeController@index');

Route::get('/Login', 'App\Http\Controllers\LoginController@index');
Route::post('/Login', 'App\Http\Controllers\LoginController@fill');

Route::get('/Account', 'App\Http\Controllers\AccountController@Account');

Route::get('/Signin', 'App\Http\Controllers\SigninController@index');
Route::post('/Signin', 'App\Http\Controllers\SigninController@fill');

Route::get('/Reset', 'App\Http\Controllers\ResetController@index');

Route::get('/Admin', 'App\Http\Controllers\AdminController@index');

Route::get('/Shop', 'App\Http\Controllers\ShopController@index');
