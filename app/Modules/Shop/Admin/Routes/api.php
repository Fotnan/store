<?php

Route::group(['prefix' => 'admins', 'middleware' => []], function () {
    Route::get('/', 'Api\AdminController@index')->name('api.admins.index');
    Route::post('/', 'Api\AdminController@store')->name('api.admins.store');
    Route::get('/{admin}', 'Api\AdminController@show')->name('api.admins.read');
    Route::put('/{admin}', 'Api\AdminController@update')->name('api.admins.update');
    Route::delete('/{admin}', 'Api\AdminController@destroy')->name('api.admins.delete');
});