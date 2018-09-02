<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateSubscriberRequest;
use App\Post;
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
        \Artisan::call('config:clear');
        \Artisan::call('config:cache');
        $slider = Post::getSlider();
        $latest = Post::getLatest(false);
        $most_views = Post::getViewed(false);
        return view('themes.' . env('APP_THEME') . '.pages.home', compact('slider', 'latest', 'most_views'));
    }
}
