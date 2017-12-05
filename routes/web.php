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

Route::get('/', function () {
    return view('welcome');
});

Route::get('animales', 'AnimalsController@index');
Route::get('animales/search', 'AnimalsController@search');
Route::get('animales/{id}', 'AnimalsController@show');
Route::get('animales-imagenes', 'AnimalsController@images');

Route::get('protege/denuncias', 'ProtegeDenunciasController@index');
Route::post('protege/denunciar', 'ProtegeDenunciasController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('bot', 'ChatbotController@store');

Route::group(['middleware' => ['auth']], function () {
    Route::get('denuncias', 'DenunciasController@index');
    Route::get('denuncias/{id}/ver', 'DenunciasController@view');
    Route::get('mapa', 'DenunciasController@map');
});
