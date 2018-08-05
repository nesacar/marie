<?php

namespace App\Http\Controllers\Web;

use App\Brand;
use App\Category;
use App\Gender;
use App\Post;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    /**
     * method used to return shop page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shop(){
        $categories = Category::tree(2);
        $brands = Brand::orderBy('title', 'ASC')->visible()->get();
        $genders = Gender::get();
        $do_not_miss_it = Post::getDoNotMissIt(false, 6, 2);
        $products = Product::search()->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        return view('themes.' . env('APP_THEME') . '.pages.shop', compact('categories', 'products', 'brands', 'genders', 'do_not_miss_it'));
    }

    /**
     * method used to return shop page
     *
     * @param string $slug - present shop category slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function shopCategory($slug){
        $category = Category::whereSlug($slug)->visible()->first();
        if(empty($category)) return redirect('/');
        $categories = Category::tree(2);
        $brands = Brand::orderBy('title', 'ASC')->visible()->get();
        $genders = Gender::get();
        $do_not_miss_it = Post::getDoNotMissIt(false, 6, 2);
        $products = Product::search($category->id)->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        return view('themes.' . env('APP_THEME') . '.pages.shop', compact('categories', 'products', 'brands', 'genders', 'do_not_miss_it'));
    }

    /**
     * method used to return shop page
     *
     * @param string $slug1 - present shop parent category slug
     * @param string $slug2 - present shop child category slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function shopSubCategory($slug1, $slug2){
        $category = Category::whereSlug($slug2)->visible()->first();
        if(empty($category)) return redirect('/');
        $categories = Category::tree(2);
        $brands = Brand::orderBy('title', 'ASC')->visible()->get();
        $genders = Gender::get();
        $do_not_miss_it = Post::getDoNotMissIt(false, 6, 2);
        $products = Product::search($category->id)->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        return view('themes.' . env('APP_THEME') . '.pages.shop', compact('categories', 'products', 'brands', 'genders', 'do_not_miss_it'));
    }
}
