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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => ['auth:api', 'cors']], function () {
    Route::get('articulos', 'API\ArticuloController@index');
    Route::get('articulos/{search}', 'API\ArticuloController@show');
    Route::get('clientes', 'API\CcmcliController@index');
    Route::get('formas-pago', 'API\CcmcpaController@index');
    Route::post('dfa', 'API\ArticuloFamdfaController@index');
    Route::get('mcodven/{nombre}', 'API\CcmvenController@show');
    Route::post('cabped', 'API\CabpeController@store');
    Route::post('historial', 'API\CabpeController@show');
    Route::get('detped/{mnserie}/{mnroped}', 'API\DetpeController@show');
    Route::get('ccmtrs', 'API\CcmtrsController@index');
    Route::get('ccmcpa/{tipo}' . 'API\CcmcpaController@show');
    Route::post('cambiar', 'API\CcmcpaController@update');
    Route::get('mainView/{nombre}', 'API\MainViewController@index');
});
