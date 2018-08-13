<?php

namespace App\Http\Controllers\Web\Admin;

use App\Banner;
use App\Click;
use App\Newsletter;
use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannersController extends Controller
{
    /**
     * method used to preview Newsletter banner
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function click(Request $request, $id){
        $banner = Banner::find($id);
        if(request('email') && request('news') && !empty($banner)){
            $newsletter = Newsletter::where('verification', request('news'))->first();
            $subscriber = Subscriber::where('verification', request('email'))->first();
            if(isset($newsletter) && isset($subscriber)){
                Click::insertClick($newsletter->id, false, $banner->id, $subscriber->id);
            }
            return redirect($banner->link);
        }else{
            return redirect('/');
        }
    }
}
