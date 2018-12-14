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
Route::get('/services/minigames', 'PageController@minigames')->name('minigames.index');
Route::get('/accounts', 'PageController@accounts')->name('accounts.index');
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('is_admin');
Route::get('/admin/edit/{quest}','AdminController@edit')->name('admin.quest.edit')->middleware('is_admin');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
