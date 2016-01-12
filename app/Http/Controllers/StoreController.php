<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use Illuminate\Http\Request;


use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class StoreController extends Controller
{
    private $category;

    public function __construct()
    {

    }

    public function index(){


        $productFeatured = Product::featured()->get();
        $productRecommend = Product::recommend()->get();

        $categories = Category::all();

        return view('store.index', compact('categories', 'productFeatured','productRecommend'));

    }

    public function category($id){


        $produtosPorCategoria = Category::find($id)->products;
        $categories = Category::all();


        return view('store.category', compact('produtosPorCategoria','categories'));
    }

}
