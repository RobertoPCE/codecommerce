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
 * Admin
 */
Route::group(['prefix' => 'admin'], function () {

    // Categories
    Route::get('categories', ['as'=>'admin.categories', 'uses'=>'AdminCategoriesController@index']);

    // Products
    Route::get('products', ['as'=>'admin.products', 'uses'=>'AdminProductsController@index']);

});



Route::get('/', function () {
    return view('welcome');
});
