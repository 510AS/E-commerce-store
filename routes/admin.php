<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin', 'prefix' => 'admin'],function () {

            Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');

         ################################## categories routes ######################################
        Route::group(['prefix' => 'main_categories'], function () {
            Route::get('/', 'MainCategoryController@index')->name('admin.maincategories');
            Route::get('create', 'MainCategoryController@create')->name('admin.maincategories.create');
            Route::post('store', 'MainCategoryController@store')->name('admin.maincategories.store');
            Route::get('show/{id}', 'MainCategoryController@show')->name('admin.maincategories.show');
            Route::get('edit/{id}', 'MainCategoryController@edit')->name('admin.maincategories.edit');
            Route::post('update/{id}', 'MainCategoryController@update')->name('admin.maincategories.update');
            Route::get('delete/{id}', 'MainCategoryController@destroy')->name('admin.maincategories.delete');
        });

        ################################## end categories    #######################################

        ################################## sub categories routes ######################################
        Route::group(['prefix' => 'sub_categories'], function () {
            Route::get('/', 'SubCategoriesController@index')->name('admin.subcategories');
            Route::get('create', 'SubCategoriesController@create')->name('admin.subcategories.create');
            Route::post('store', 'SubCategoriesController@store')->name('admin.subcategories.store');
            Route::get('show/{id}', 'SubCategoriesController@show')->name('admin.subcategories.show');
            Route::get('edit/{id}', 'SubCategoriesController@edit')->name('admin.subcategories.edit');
            Route::post('update/{id}', 'SubCategoriesController@update')->name('admin.subcategories.update');
            Route::get('delete/{id}', 'SubCategoriesController@destroy')->name('admin.subcategories.delete');
        });

        ################################## end categories    #######################################

        ################################## brands routes ######################################
        Route::group(['prefix' => 'brands'], function () {
            Route::get('/', 'BrandController@index')->name('admin.brands');
            Route::get('create', 'BrandController@create')->name('admin.brands.create');
            Route::post('store', 'BrandController@store')->name('admin.brands.store');
            Route::get('shoe/{id}', 'BrandController@show')->name('admin.brands.show');
            Route::get('edit/{id}', 'BrandController@edit')->name('admin.brands.edit');
            Route::post('update/{id}', 'BrandController@update')->name('admin.brands.update');
            Route::get('delete/{id}', 'BrandController@destroy')->name('admin.brands.delete');
        });
        ################################## end brands    #######################################

        });
        Route::group(['prefix'=>'admin','namespace'=>'Dashboard','middleware'=>'guest:admin'],function () {

                Route::get('/login','LoginController@getLogin')->name('get.admin.login');
                Route::post('/login','LoginController@login')->name('admin.login');
        });




    });


