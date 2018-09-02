<?php

namespace App\Http\Controllers\Web;

use App\BeautyBox;
use App\Category;
use App\Post;
use App\Product;
use App\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeautyBoxesController extends Controller
{
    /**
     * method used to return beauty_box page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function beautyBox(){
        $beauty_box = BeautyBox::first();
        $latest = Post::getLatest(false);
        $most_views = Post::getViewed(false);
        $products = $beauty_box->product()->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        $partners = BeautyBox::getPartners($products);
        Seo::beautyBox($beauty_box);
        return view('themes.' . env('APP_THEME') . '.pages.beautybox', compact('latest', 'most_views', 'category', 'products', 'beauty_box', 'partners'));
    }

    /**
     * method used to return beauty_box page
     *
     * @param string $slug - present beauty-box child category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function beautyBoxCategory($slug) {
        $beauty_box = BeautyBox::whereSlug($slug)->first();
        $latest = Post::getLatest(false);
        $most_views = Post::getViewed(false);
        $products = $beauty_box->product()->orderBy('publish_at', 'DESC')->paginate(Product::$frontPaginate);
        $partners = BeautyBox::getPartners($products);
        Seo::beautyBox($beauty_box);
        return view('themes.' . env('APP_THEME') . '.pages.beautybox', compact('latest', 'most_views', 'category', 'products', 'beauty_box', 'partners'));
    }
}
