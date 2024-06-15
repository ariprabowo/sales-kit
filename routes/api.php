<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix'=>'type'], function(){
    Route::get('/getData', ['as' => 'type.getData', 'uses' => 'App\Http\Controllers\TypeController@getData']);
});

Route::group(['prefix'=>'reservation'], function(){
    Route::post('/create', ['as' => 'reservation.create', 'uses' => 'App\Http\Controllers\ReservationsController@store']);
});