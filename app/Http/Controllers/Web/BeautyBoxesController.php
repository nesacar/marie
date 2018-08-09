<?php

namespace App\Http\Controllers\Web;

use App\BeautyBox;
use App\Category;
use App\Post;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeautyBoxesController extends Controller
{
    /**
     * method used to return beautybox page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function beautyBox(){
        $category = Category::whereSlug('beauty-box')->first();
        $beauty_box = BeautyBox::with('partner')->first();
        $latest = Post::getLatest(false);
        $most_views = Post::getViewed(false);
        $products = Product::search($category->id)->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        return view('themes.' . env('APP_THEME') . '.pages.beautybox', compact('latest', 'most_views', 'category', 'products', 'beauty_box'));
    }

    /**
     * method used to return beautybox page
     *
     * @param string $slug - present beauty-box child category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function beautyBoxCategory($slug) {
        $category = Category::whereSlug($slug)->first();
        $beauty_box = BeautyBox::with('partner')->whereSlug($slug)->first();
        $latest = Post::getLatest(false);
        $most_views = Post::getViewed(false);
        $products = Product::search($category->id)->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        return view('themes.' . env('APP_THEME') . '.pages.beautybox', compact('latest', 'most_views', 'category', 'products', 'beauty_box'));
    }
}
