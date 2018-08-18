<?php

namespace App\Http\Controllers\Web;

use App\Blog;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    /**
     * method used to return category page
     *
     * @param string $slug - present category slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category($slug){
        $category = Blog::whereSlug($slug)->with('video')->first();
        $latest = Post::getLatest($category);
        $do_not_miss_it = Post::getDoNotMissIt($category, 6, 2);
        return view('themes.' . env('APP_THEME') . '.pages.category', compact('category', 'latest', 'do_not_miss_it'));
    }

    /**
     * method used to return sub category page
     *
     * @param string $slug1 - present parent category slug
     * @param string $slug2 - present child category slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function subCategory($slug1, $slug2){
        $category = Blog::whereSlug($slug2)->with('video')->first();
        $latest = Post::getLatest($category);
        $do_not_miss_it = Post::getDoNotMissIt($category, 6, 2);
        return view('themes.' . env('APP_THEME') . '.pages.category', compact('category', 'latest', 'do_not_miss_it'));
    }
}
