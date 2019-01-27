<?php


Route::get('/', 'PageController@index')->name('index');
Route::get('/services/quests', 'PageController@questList')->name('quest.index');
Route::get('/services/minigames', 'PageController@minigames')->name('minigames.index');
Route::get('/accounts', 'PageController@accounts')->name('accounts.index');
Route::get('/accounts/{account}', 'PageController@details')->name('details.index');
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('is_admin');
Route::get('/admin/accounts', 'AdminController@accounts')->name('admin.accounts')->middleware('is_admin');
Route::get('/admin/quests', 'AdminController@quests')->name('admin.quests')->middleware('is_admin');
Route::get('/admin/quests/get', 'QuestApiController@updateQuests')->name('quests.update')->middleware('is_admin');
Route::get('/admin/accounts/create', 'AdminController@create')->name('admin.create')->middleware('is_admin');
Route::get('/admin/accounts/edit/{account}', 'AdminController@editAccount')->name('admin.edit')->middleware('is_admin');
Route::post('/admin/accounts/create', 'AdminController@store')->name('admin.store')->middleware('is_admin');
Route::delete('/admin/accounts/delete/{account}', 'AdminController@destroyAccount')->name('admin.delete')->middleware('is_admin');
Route::get('/admin/edit/{quest}','AdminController@edit')->name('admin.quest.edit')->middleware('is_admin');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
