<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('quests', 'CrudsController@index');
Route::get('quests/search', 'CrudsController@search');
Route::put('quests/{quest}', 'CrudsController@update');
Route::get('accounts', 'CrudsController@getAccounts');
Route::get('accounts/{account}', 'CrudsController@getAccount');

