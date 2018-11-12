<?php

    Route::post('sign', 'Api\UserController@sign');

    Route::group(['middleware' => 'auth:api'], function () {

        Route::resource('category', 'Api\CategorieController');
        Route::resource('entry', 'Api\EntryController');
        /*Route::get('user','Api\UserController@index');
        Route::get('user/{id}', 'Api\UserController@show');// rota test
        Route::put('user/{id}', 'Api\UserController@update');// rota test
        Route::delete('user/{id}', 'Api\UserController@destroy');// rota test
            */

        //
        //Route::resource('expense', 'Api\ExpenseController');
});
