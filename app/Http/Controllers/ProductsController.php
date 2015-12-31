<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $productModel;
    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function index()
    {
        $product = $this->productModel->paginate(10);
        return view('products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $categories = $category->lists('name','id');
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        //dd("entrou aqui");

        $this->productModel->fill($request->all());
        $this->productModel->save();

        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Category $category)
    {
        $categories = $category->lists('name','id');
        $product = $this->productModel->find($id);
        return view('products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id, Requests\ProductRequest $request)
    {
        $this->productModel->find($id)->update($request->all());

        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productModel->find($id)->delete();
        return redirect()->route('product');
    }

    public function images($id){

       $product = $this->productModel->find($id);
        return view('products.images', compact('product'));
    }

    public function createImage($id){
        $product = $this->productModel->find($id);
        return view('products.create_image', compact('product'));
    }

    public function storeImage($id, Request $request,ProductImage $productImage ){

            $file = Input::file('photo');

       // if(input::file('photo')->isValid()){

            $extension = Input::file('photo')->getClientOriginalExtension();
            $image = $productImage::create(['product_id' => $id, 'extension' => $extension]);

            Storage::disk('public_local')->put($image->id . '.' . $extension, File::get($file));

            return redirect()->route('products.images', ['id' => $id]);
       // }else{
         //   echo "algo está errado";
//        /}
    }

        public function destroyImage($id,ProductImage $productImage){

        $image = $productImage->find($id);

            if(file_exists(public_path() . '/uploads/' .$image->id.'.'.$image->extension)){

                Storage::disk('public_local')->delete($image->id.'.'.$image->extension);

                $product = $image->product;
                $image->delete();

                return redirect()->route('products.images', ['id' => $product->id]);

            }else{

                echo "essa imagem não existe";
            }


    }
}
