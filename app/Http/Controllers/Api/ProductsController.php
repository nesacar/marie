<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of Product model
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        $products = Product::visible()->orderBy('created_at', 'DESC')->paginate(Product::$paginate);

        return response()->json([
            'products' => $products,
        ]);
    }

    /**
     * method used to store new product and return
     *
     * @param CreateProductRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateProductRequest $request){
        $product = Product::create(request()->except('image'));
        $product->update(['image' => $product->storeImage()]);

        $product->category()->sync(explode(',', request('category_ids')));

        return response()->json([
            'product' => $product,
        ]);
    }


    /**
     * method used to return product
     *
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Product $product){
        return response()->json([
            'product' => $product,
            'category_ids' => $product->category()->visible()->pluck('id'),
            'gender_id' => $product->gender()->select('id', 'title')->get(),
            'brand_id' => $product->brand()->select('id', 'title')->get(),
            'categories' => Category::tree(),
        ]);
    }


    /**
     * method used to update product and return
     *
     * @param CreateProductRequest $request
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(CreateProductRequest $request, Product $product){
        $product->update(request()->except('image'));
        $product->update(['image' => $product->storeImage()]);

        $product->category()->sync(explode(',', request('category_ids')));

        return response()->json([
            'product' => $product,
            'category_ids' => $product->category()->visible()->pluck('id'),
            'gender_id' => $product->gender()->select('id', 'title')->get(),
            'brand_id' => $product->brand()->select('id', 'title')->get(),
            'categories' => Category::tree(),
        ]);
    }


    /**
     * method used to destroy product
     *
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Product $product){
        $product->delete();

        return response()->json([
            'message' => 'deleted',
        ]);
    }

    /**
     * method used to search and return products
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(){
        Product::setCategoryValue();
        $products = Product::search()->with('brand', 'category')->paginate(Product::$paginate);

        return response()->json([
            'products' => $products,
        ]);
    }

    /**
     * Display a listing of Product model
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function lists(){
        $products = Product::select('id', 'code as title')->visible()->get();

        return response()->json([
            'products' => $products,
        ]);
    }
}
