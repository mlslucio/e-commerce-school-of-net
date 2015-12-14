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