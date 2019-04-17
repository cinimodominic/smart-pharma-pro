<?php

use App\User;

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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/data', 'DataController@index')->name('data');
Route::get('/rep', 'RepController@index')->name('rep');
Route::get('/script', 'ScriptController@index')->name('script');

Route::post('/rep', 'RepController@store');

Route::get('/users', 'RepController@users')->middleware('auth');
Route::get('/users/{user}', 'RepController@show')->middleware('auth');
Route::patch('/users/{user}', 'RepController@update');
Route::patch('/users/delete/{user}', 'RepController@destroy');

Route::post('/script', 'ScriptController@store');