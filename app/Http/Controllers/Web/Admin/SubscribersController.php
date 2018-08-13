<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Requests\CreateSubscriberRequest;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller
{
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

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function subscriberLogout(){
        $subscriber = Subscriber::where('verification', request('verification'))->first();
        if(empty($subscriber)) return redirect('/');
        $subscriber->update(['block' => 1]);
        return redirect('/')->with('message', 'Pretplatnik je uspešno odjavljen sa naše Newsletter liste.');
    }
}
