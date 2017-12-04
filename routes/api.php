<?php


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

Route::post('login', 'Api\AuthController@login');

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('denuncias', 'Api\DenunciasController@index');
    Route::post('logout', 'Api\AuthController@logout');
});
