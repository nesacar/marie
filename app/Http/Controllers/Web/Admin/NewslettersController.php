<?php

namespace App\Http\Controllers\Web\Admin;

use App\Newsletter;
use App\Newsletter_template;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{

    /**
     * method used to preview Newsletter
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function newsletterPreview(){
        $newsletter = Newsletter::where('verification', request('verification'))->first();
        $templates = Newsletter_template::where('newsletter_id', $newsletter->id)->get();
        $subscriber = Subscriber::first();
        if(empty($newsletter)) return redirect('/');
        return view('themes.' . env('APP_THEME') . '.email.dist.newsletter', compact('newsletter', 'subscriber', 'templates'));
    }
}
