<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SEOMeta;
use OpenGraph;

class Seo extends Model
{
    /**
     * method used to set SEO optimization for home page
     */
    public static function home(){
        $setting = Setting::get();

        SEOMeta::setTitle('Home - ' . $setting->title);
        SEOMeta::setDescription($setting->desc);
        SEOMeta::setCanonical(url('/'));
        SEOMeta::addKeyword($setting->keywords);

        OpenGraph::addImage(url( 'client/images/marie-clarie-social-share.jpg'), ['height' => 1200, 'width' => 630]);
        OpenGraph::addProperty('locale', 'sr');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setTitle('Home - ' . $setting->title);
        OpenGraph::setDescription($setting->desc);
        OpenGraph::setUrl(url('/'));
        OpenGraph::setSiteName($setting->title);
    }

    /**
     * method used to set SEO optimization for category page
     *
     * @param $category
     */
    public static function category($category){
        $setting = Setting::get();

        SEOMeta::setTitle($category->seo_title . ' - ' . $setting->title);
        SEOMeta::setDescription(strip_tags($category->short, ''));
        SEOMeta::setCanonical($category->link);
        SEOMeta::addKeyword($category->seo_keywords);

        OpenGraph::addImage($category->image? url( $category->image) : '', ['height' => 800, 'width' => 450]);
        OpenGraph::addProperty('locale', 'sr');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setTitle($category->seo_title . ' - ' . $setting->title);
        OpenGraph::setDescription(strip_tags($category->short, ''));
        OpenGraph::setUrl($category->link);
        OpenGraph::setSiteName($setting->title);
    }

    /**
     * method used to set SEO optimization for article, gallery and images  pages
     *
     * @param $post
     */
    public static function post($post){
        $setting = Setting::get();

        SEOMeta::setTitle($post->title . ' - ' . $setting->title);
        SEOMeta::setDescription($post->short);
        SEOMeta::setCanonical($post->link);
        SEOMeta::addKeyword(implode(', ', $post->tag->pluck('title')->toArray()));

        OpenGraph::addImage(url( $post->image), ['height' => 800, 'width' => 450]);
        OpenGraph::addProperty('locale', 'sr');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setTitle($post->title . ' - ' . $setting->title);
        OpenGraph::setDescription($post->short);
        OpenGraph::setUrl($post->link);
        OpenGraph::setSiteName($setting->title);
    }

    /**
     * method used to set SEO optimization for beauty_box page
     *
     * @param $beauty_box
     */
    public static function beautyBox($beauty_box){
        $setting = Setting::get();

        SEOMeta::setTitle($beauty_box->title . ' - ' . $setting->title);
        SEOMeta::setDescription($beauty_box->overtitle);
        SEOMeta::setCanonical(url('marie-claire-preporucuje/' . $beauty_box->slug));
        SEOMeta::addKeyword($setting->keywords);

        OpenGraph::addImage(url( $beauty_box->image), ['height' => 800, 'width' => 450]);
        OpenGraph::addProperty('locale', 'sr');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setTitle($beauty_box->title . ' - ' . $setting->title);
        OpenGraph::setDescription($beauty_box->overtitle);
        OpenGraph::setUrl(url('marie-claire-preporucuje/' . $beauty_box->slug));
        OpenGraph::setSiteName($setting->title);
    }

    /**
     * method used to set SEO optimization for shop page
     *
     * @param $category
     */
    public static function shop(){
        $setting = Setting::get();

        SEOMeta::setTitle('Shop - ' . $setting->title);
        SEOMeta::setDescription($setting->desc);
        SEOMeta::setCanonical(url('shop'));
        SEOMeta::addKeyword($setting->keywords);

        OpenGraph::addImage(url( 'client/images/marie-clarie-social-share.jpg'), ['height' => 1200, 'width' => 630]);
        OpenGraph::addProperty('locale', 'sr');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setTitle('Shop - ' . $setting->title);
        OpenGraph::setDescription($setting->desc);
        OpenGraph::setUrl(url('shop'));
        OpenGraph::setSiteName($setting->title);
    }

    /**
     * method used to set SEO optimization for shop page
     *
     * @param $category
     */
    public static function shopCategory($category){
        $setting = Setting::get();

        SEOMeta::setTitle($category->title . ' - ' . $setting->title);
        SEOMeta::setDescription(strip_tags($category->short, ''));
        SEOMeta::setCanonical($category->link);
        SEOMeta::addKeyword($setting->keywords);

        OpenGraph::addImage($category->image? url( $category->image) : '', ['height' => 800, 'width' => 450]);
        OpenGraph::addProperty('locale', 'sr');
        OpenGraph::addProperty('type', 'articles');
        OpenGraph::setTitle($category->title . ' - ' . $setting->title);
        OpenGraph::setDescription(strip_tags($category->short, ''));
        OpenGraph::setUrl($category->link);
        OpenGraph::setSiteName($setting->title);
    }
}
