<?php

    Route::post('sign', 'Api\UserController@sign');


    Route::post('forgot-password', 'Api\UserController@forgotPassword');
    Route::group(['middleware' => 'auth:api'], function () {

        /*Route::get('user','Api\UserController@index');
        Route::get('user/{id}', 'Api\UserController@show');// rota test
        Route::put('user/{id}', 'Api\UserController@update');// rota test
        Route::delete('user/{id}', 'Api\UserController@destroy');// rota test*/

        Route::resource('category', 'Api\CategoriesController');
        Route::resource('entry', 'Api\EntryController');
        Route::resource('expense', 'Api\ExpenseController');
});
