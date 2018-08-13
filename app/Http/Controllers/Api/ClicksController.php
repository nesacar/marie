<?php

namespace App\Http\Controllers\Api;

use App\Banner;
use App\Click;
use App\Newsletter;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClicksController extends Controller
{
    /**
     * method used to return count post for newsletter
     *
     * @param int $newsletter_id
     * @param int $post_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function post($newsletter_id, $post_id){
        $clicks = Click::where('newsletter_id', $newsletter_id)->where('post_id', $post_id)->count();

        return response()->json([
            'clicks' => $clicks
        ]);
    }

    /**
     * method used to return count banner for newsletter
     *
     * @param $newsletter_id
     * @param $banner_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function banner($newsletter_id, $banner_id){
        $clicks = Click::where('newsletter_id', $newsletter_id)->where('banner_id', $banner_id)->count();

        return response()->json([
            'clicks' => $clicks
        ]);
    }

    /**
     * method used to return post clicks for newsletter
     *
     * @param $newsletter_id
     * @param $post_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function postClicks($newsletter_id, $post_id){
        $newsletter = Newsletter::find($newsletter_id);
        $clicks = Click::getPostClicks($newsletter->id, $post_id);
        $post = Post::find($post_id);

        return response()->json([
            'newsletter' => $newsletter,
            'clicks' => $clicks,
            'post' => $post,
        ]);
    }

    /**
     * method used to return count banner clicks for newsletter
     *
     * @param $newsletter_id
     * @param $banner_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function bannerClicks($newsletter_id, $banner_id){
        $newsletter = Newsletter::find($newsletter_id);
        $clicks = Click::getBannerClicks($newsletter->id, $banner_id);
        $banner = Banner::find($banner_id);

        return response()->json([
            'newsletter' => $newsletter,
            'clicks' => $clicks,
            'banner' => $banner,
        ]);
    }
}
