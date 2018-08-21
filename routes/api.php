<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'register', 'namespace' => 'API\Auth'], function () {
    Route::post('/user', 'RegisterController@userRegister');
    Route::post('/client', 'RegisterController@clientRegister');
});
