<?php

namespace App\Http\Controllers\Web;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    public function shop(){
        $categories = Category::tree(2);
        $products = Product::search()->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        return view('themes.' . env('APP_THEME') . '.pages.shop', compact('categories', 'products'));
    }
}
