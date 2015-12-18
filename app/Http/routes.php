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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories',['as'=>'categories', 'uses'=>'CategoriesController@index']);
Route::get('categories/create',['as'=>'categories.create','uses'=>'CategoriesController@create']);
Route::post('categories',['as'=>'categories.storage','uses'=>'CategoriesController@store']);
Route::get('categories/destroy/{id}',['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
Route::get('categories/edit/{id}',['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
Route::put('categories/update/{id}',['as'=>'categories.update','uses'=>'CategoriesController@update']);

Route::get('products',['as'=>'products', 'uses'=>'ProductsController@index']);
Route::get('products/create',['as'=>'products.create','uses'=>'ProductsController@create']);
Route::post('products',['as'=>'products.storage','uses'=>'ProductsController@store']);
Route::get('products/destroy/{id}',['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
Route::get('products/edit/{id}',['as'=>'products.edit','uses'=>'ProductsController@edit']);
Route::put('products/update/{id}',['as'=>'products.update','uses'=>'ProductsController@update']);



Route::group(['prefix'=>'admin'], function(){

    Route::get('categories/show/{id}',['uses' => 'AdminCategoriesController@show', 'as' =>'listarCategorias']);
    Route::get('categories/insert',['uses' => 'AdminCategoriesController@insert', 'as' =>'inserirCategoria']);
    Route::get('categories/edit/{id}',['uses' => 'AdminCategoriesController@edit', 'as' =>'editarCategroia']);
    Route::get('categories/delete/{id}',['uses' => 'AdminCategoriesController@destroy', 'as' =>'deletarCategoria']);

    Route::get('products/show/{id}',['as' =>'listarProduto', 'uses' => 'AdminProductsController@show']);
    Route::get('products/insert',['as' =>'inserirProduto', 'uses' => 'AdminProductsController@insert']);
    Route::get('products/edit/{id}',['as' =>'editarProduto', 'uses' => 'AdminProductsController@edit']);
    Route::get('products/delete/{id}',['as' =>'deletarProduto', 'uses' => 'AdminProductsController@destroy']);

});

//Route::get('category/{category}' , function(\CodeCommerce\Category $category){

 //   return $category->name;
//});

Route::get('category/{category}', 'AdminCategoriesController@bind');