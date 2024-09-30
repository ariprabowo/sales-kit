<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


Route::group(['prefix'=>'product'], function(){
    Route::get('/getData', ['as' => 'product.getData', 'uses' => 'App\Http\Controllers\ProductController@getData']);
});

Route::group(['prefix'=>'type'], function(){
    Route::get('/getData', ['as' => 'type.getData', 'uses' => 'App\Http\Controllers\TypeController@getData']);
});

Route::group(['prefix'=>'reservation'], function(){
    Route::post('/create', ['as' => 'reservation.create', 'uses' => 'App\Http\Controllers\ReservationController@store']);
});

Route::group(['prefix'=>'setting'], function(){
    Route::get('/getData', ['as' => 'setting.getData', 'uses' => 'App\Http\Controllers\SettingController@getData']);
});

Route::group(['prefix'=>'testimoni'], function(){
    Route::get('/getData', ['as' => 'testimoni.getData', 'uses' => 'App\Http\Controllers\TestimoniController@getData']);
});

Route::group(['prefix'=>'gallery'], function(){
    Route::get('/getData', ['as' => 'gallery.getData', 'uses' => 'App\Http\Controllers\GalleryController@getData']);
});