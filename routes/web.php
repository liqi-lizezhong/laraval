<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!|
*/

Auth::routes();//1·通过artisan调用内层的Auth认证。

Route::get('/home', 'HomeController@index')->name('home');
