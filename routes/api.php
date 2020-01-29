<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// TODO @laravel-test
Route::group(['middleware' => 'throttle:60'], function () {
    Route::get('/calculator/add', 'CalculatorController@add');
    Route::get('/calculator/sub', 'CalculatorController@sub');
    Route::get('/calculator/mul', 'CalculatorController@mul');
    Route::get('/calculator/div', 'CalculatorController@div');
    Route::get('/calculator/mod', 'CalculatorController@mod');
});
