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

Route::get('/', 'StoreController@index');


Route::get('teste', function(){

    return "teste";
});

    Route::get('teste/{num}', ['where' => ['num'=>'[0-9]+'], function(){

            return "numero";
    }]);

    Route::group(['prefix'=>'admin', 'where'=>['id'=>'[0-9]+']], function() {

        Route::group(['prefix' => 'categories'], function () {

            Route::get('/', ['as' => 'category', 'uses' => 'CategoriesController@index']);
            Route::get('create', ['as' => 'categories.create', 'uses' => 'CategoriesController@create']);
            Route::post('categories', ['as' => 'categories.storage', 'uses' => 'CategoriesController@store']);
            Route::get('destroy/{id}', ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);
            Route::get('edit/{id}', ['as' => 'categories.edit', 'uses' => 'CategoriesController@edit']);
            Route::put('update/{id}', ['as' => 'categories.update', 'uses' => 'CategoriesController@update']);

        });


        Route::group(['prefix' => 'products'], function () {

            Route::get('/', ['as' => 'product', 'uses' => 'ProductsController@index']);
            Route::get('create', ['as' => 'products.create', 'uses' => 'ProductsController@create']);
            Route::post('products', ['as' => 'products.storage', 'uses' => 'ProductsController@store']);
            Route::get('destroy/{id}', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy']);
            Route::get('edit/{id}', ['as' => 'products.edit', 'uses' => 'ProductsController@edit']);
            Route::put('update/{id}', ['as' => 'products.update', 'uses' => 'ProductsController@update']);

            Route::group(['prefix'=>'images'], function(){

                Route::get('/{id}/product',['as'=>'products.images', 'uses'=>'ProductsController@images']);
                Route::get('create/{id}',['as'=>'products.images.create', 'uses'=>'ProductsController@createImage']);
                Route::post('upload/{id}',['as'=>'products.images.store', 'uses'=>'ProductsController@storeImage']);
                Route::get('destroy/{id}',['as'=>'products.images.destroy', 'uses'=>'ProductsController@destroyImage']);

            });

        });
    });


//Route::get('category/{category}' , function(\CodeCommerce\Category $category){

 //   return $category->name;
//});

Route::get('category/{category}', 'AdminCategoriesController@bind');