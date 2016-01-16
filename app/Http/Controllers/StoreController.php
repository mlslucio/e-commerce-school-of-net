<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;

use CodeCommerce\Tag;
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



        $category = Category::find($id);
        $categories = Category::all();
        $produtosPorCategoria = Product::ofCategory($id)->get();


        return view('store.category', compact('produtosPorCategoria','categories','category'));
    }

    public function product($id){

        $categories = Category::all();
        $product = Product::find($id);

        return view('store.product',compact('categories','product'));

    }

    public function produtosPorTag($id){
        $produto = Tag::find($id)->products;
        $categories = Category::all();

        return view('store.produtos_por_tag', compact('produto', 'categories'));
    }

}
