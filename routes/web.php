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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>'auth.checkrole','as'=>'admin.'], function(){

	Route::group(['prefix'=>'categories'], function(){
		Route::get('/', ['as'=>'categories.index','uses'=>'CategoriesController@index']);
		Route::get('create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
		Route::get('edit/{id}', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
		Route::post('update/{id}', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
		Route::post('store', ['as'=>'categories.store','uses'=>'CategoriesController@store']);
	});

	Route::group(['prefix'=>'clients'], function(){
		Route::get('/', ['as'=>'clients.index','uses'=>'ClientsController@index']);
		Route::get('create', ['as'=>'clients.create','uses'=>'ClientsController@create']);
		Route::get('edit/{id}', ['as'=>'clients.edit','uses'=>'ClientsController@edit']);
		Route::post('update/{id}', ['as'=>'clients.update','uses'=>'ClientsController@update']);
		Route::post('store', ['as'=>'clients.store','uses'=>'ClientsController@store']);
	});

	Route::group(['prefix'=>'products'], function(){
		Route::get('/', ['as'=>'products.index','uses'=>'ProductsController@index']);
		Route::get('create', ['as'=>'products.create','uses'=>'ProductsController@create']);
		Route::get('edit/{id}', ['as'=>'products.edit','uses'=>'ProductsController@edit']);
		Route::post('update/{id}', ['as'=>'products.update','uses'=>'ProductsController@update']);
		Route::post('store', ['as'=>'products.store','uses'=>'ProductsController@store']);
		Route::get('destroy/{id}', ['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
	});
});
