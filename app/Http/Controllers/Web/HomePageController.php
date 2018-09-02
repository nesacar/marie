<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateSubscriberRequest;
use App\Post;
use App\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    /**
     * method used to return homepage
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homepage(){
        $slider = Post::getSlider();
        $latest = Post::getLatest(false);
        $most_views = Post::getViewed(false);
        Seo::home();
        return view('themes.' . env('APP_THEME') . '.pages.home', compact('slider', 'latest', 'most_views'));
    }
}
