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
        Route::post('', ['as'=>'admin.categories.store', 'uses'=>'AdminCategoriesController@store']);
        Route::get('create', ['as'=>'admin.categories.create', 'uses'=>'AdminCategoriesController@create']);
        Route::get('{id}/destroy', ['as'=>'admin.categories.destroy', 'uses'=>'AdminCategoriesController@destroy']);
        Route::get('{id}/edit', ['as'=>'admin.categories.edit', 'uses'=>'AdminCategoriesController@edit']);
        Route::put('{id}/update', ['as'=>'admin.categories.update', 'uses'=>'AdminCategoriesController@update']);
    });

    // Products
    Route::group(['prefix' => 'products'], function () {
        Route::get('', ['as'=>'admin.products', 'uses'=>'AdminProductsController@index']);
        Route::post('', ['as'=>'admin.products.store', 'uses'=>'AdminProductsController@store']);
        Route::get('create', ['as'=>'admin.products.create', 'uses'=>'AdminProductsController@create']);
        Route::get('{id}/destroy', ['as'=>'admin.products.destroy', 'uses'=>'AdminProductsController@destroy']);
        Route::get('{id}/edit', ['as'=>'admin.products.edit', 'uses'=>'AdminProductsController@edit']);
        Route::put('{id}/update', ['as'=>'admin.products.update', 'uses'=>'AdminProductsController@update']);

        // Images
        Route::group(['prefix' => 'images'], function () {

            Route::get('{id}/product', ['as'=>'admin.products.images', 'uses'=>'AdminProductsController@images']);
            Route::post('{id}/product', ['as'=>'admin.products.images.store', 'uses'=>'AdminProductsController@storeImage']);
            Route::get('create/{id}/product', ['as'=>'admin.products.images.create', 'uses'=>'AdminProductsController@createImage']);
            Route::get('destroy/{id}/product', ['as'=>'admin.products.images.destroy', 'uses'=>'AdminProductsController@destroyImage']);

        });
    });

});



Route::get('/', function () {
    return view('welcome');
});
