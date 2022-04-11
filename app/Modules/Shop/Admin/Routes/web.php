<?php

Route::group(['prefix' => 'admins', 'middleware' => []], function () {
    Route::get('/', 'AdminController@index')->name('admins.index');
    Route::get('/create', 'AdminController@create')->name('admins.create');
    Route::post('/', 'AdminController@store')->name('admins.store');
    Route::get('/{admin}', 'AdminController@show')->name('admins.read');
    Route::get('/edit/{admin}', 'AdminController@edit')->name('admins.edit');
    Route::put('/{admin}', 'AdminController@update')->name('admins.update');
    Route::delete('/{admin}', 'AdminController@destroy')->name('admins.delete');
});