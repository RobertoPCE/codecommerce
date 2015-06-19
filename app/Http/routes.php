<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Padrão para id's
 */
Route::pattern('id', '[0-9]+');

/**
 * Admin
 */
Route::group(['prefix' => 'admin'], function () {

    // Categories
    Route::group(['prefix' => 'categories'], function () {
        Route::get('', ['as'=>'admin.categories', 'uses'=>'AdminCategoriesController@index']);
        Route::post('', ['as'=>'admin.store', 'uses'=>'AdminCategoriesController@store']);
        Route::get('create', ['as'=>'categories.create', 'uses'=>'AdminCategoriesController@create']);
        Route::get('{id}/destroy', ['as'=>'categories.destroy', 'uses'=>'AdminCategoriesController@destroy']);
        Route::get('{id}/edit', ['as'=>'categories.edit', 'uses'=>'AdminCategoriesController@edit']);
        Route::put('{id}/update', ['as'=>'categories.update', 'uses'=>'AdminCategoriesController@update']);
    });

    // Products
    Route::group(['prefix' => 'products'], function () {
        Route::get('', ['as'=>'admin.products', 'uses'=>'AdminProductsController@index']);
        Route::post('', ['as'=>'admin.store', 'uses'=>'AdminProductsController@store']);
        Route::get('create', ['as'=>'products.create', 'uses'=>'AdminProductsController@create']);
        Route::get('{id}/destroy', ['as'=>'products.destroy', 'uses'=>'AdminProductsController@destroy']);
        Route::get('{id}/edit', ['as'=>'products.edit', 'uses'=>'AdminProductsController@edit']);
        Route::put('{id}/update', ['as'=>'products.update', 'uses'=>'AdminProductsController@update']);
    });

});



Route::get('/', function () {
    return view('welcome');
});
