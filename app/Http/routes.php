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


    Route::group(array('prefix'=>'/','middleware'=>'auth'), function() {

        Route::get('checkout/placeOrder', ['as' => 'store.checkout', 'uses' => 'CheckOutController@place']);
        Route::get('auth/logout',['as'=>'logout','uses'=>'AuthController@logout']);


    });

    Route::group(array('prefix'=>'/'), function(){


        Route::get('ProdutosPorTag/{id}', array('as' => 'store.tag', 'uses' => 'StoreController@produtosPorTag'));
        Route::get('cart', array('as' => 'cart', 'uses' => 'CartController@index'));
        Route::get('cart/add/{id}', array('as' => 'cart.add', 'uses' => 'CartController@add'));
        Route::get('cart/destory/{id}', array('as' => 'cart.destroy', 'uses' => 'CartController@destroy'));
        Route::post('alterarQtdItem', array('as' => 'cart.alterar.qtd', 'uses' => 'CartController@alterarQtdItem'));
        Route::get('category/{id}', array('as' => 'categoria.produtos', 'uses' => 'StoreController@category'));
        Route::get('product/{id}', array('as' => 'store.product', 'uses' => 'StoreController@product'));
        Route::get('/',['uses'=>'StoreController@index','as' => 'store']);
        Route::get('auth/login', ['as' => 'login', 'uses' => 'AuthController@getLogin']);
        Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
        Route::get('auth/register',['as'=>'auth.register' , 'uses'=> 'AuthController@getRegister']);
        Route::post('auth/register',['as'=>'auth.register.save', 'uses'=> 'AuthController@postRegister']);
        Route::post('auth/recuperar_senha', ['as'=>'auth.recuperar.senha', 'uses'=>'AuthController@recuperarSenha']);
        Route::get('auth/recuperar_senha', ['as'=>'auth.recuperar.senha', 'uses'=>'AuthController@recuperarSenha']);
    });


    Route::group(['prefix'=>'admin','middleware'=>'adm', 'where'=>['id'=>'[0-9]+']], function() {


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

        Route::get('category/{category}', 'AdminCategoriesController@bind');

        /*Route::controllers([
            'auth' => 'Auth\AuthController',
            'password' => 'Auth\PasswordController',
            'teste'=>'TesteController'
        ]); */


//Route::get('category/{category}' , function(\CodeCommerce\Category $category){

 //   return $category->name;
//});

