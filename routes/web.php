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

Route::get('/', 'PageController@index')->name('index');
Route::get('/services/quests', 'PageController@questList')->name('quest.index');
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('is_admin');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
