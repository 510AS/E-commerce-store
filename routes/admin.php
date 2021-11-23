<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/



Route::group(['prefix'=>'admin','namespace'=>'Dashboard','middleware'=>'auth:admin'],function () {

    Route::get('/','DashboardController@index')->name('admin.dashboard');
});
Route::group(['prefix'=>'admin','namespace'=>'Dashboard','middleware'=>'guest:admin'],function () {

        Route::get('/login','LoginController@getLogin')->name('get.admin.login');
        Route::post('/login','LoginController@login')->name('admin.login');
});
