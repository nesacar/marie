<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\CreateSubscriberRequest;
use App\Post;
use App\Subscriber;
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
        return view('themes.' . env('APP_THEME') . '.pages.home', compact('slider', 'latest', 'most_views'));
    }

    /**
     * method used to store new newsletter subscriber
     *
     * @param CreateSubscriberRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function subscribe(CreateSubscriberRequest $request){
        $data = request()->all();
        $data['verification'] = str_random(16);
        Subscriber::create($data);
        return back()->with('message', 'Uspešno ste se prijavili na našu newsletter listu.');
    }

    public function newsletterPreview(){
        return view('themes.' . env('APP_THEME') . '.email.dist.newsletter');
    }
}
