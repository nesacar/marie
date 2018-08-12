<?php

namespace App\Providers;

use App\Helper;
use App\MenuLink;
use App\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;

class ViewsComposerServiseProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composerMenuTop();
        $this->composerSettings();
        $this->composerBeautyBoxMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * method used to return primary menu links
     */
    private function composerMenuTop(){
        $menu = MenuLink::getMenu(1);

        view()->composer('themes.' .env('APP_THEME') .'.partials.header', function($view) use ($menu){
            $view->with('menu', $menu);
        });
        view()->composer('themes.' . env('APP_THEME') .'.partials.sidenav', function($view) use ($menu){
            $view->with('menu', $menu);
        });
        view()->composer('themes.' . env('APP_THEME') .'.partials.footer', function($view) use ($menu){
            $view->with('menu', $menu);
        });
        view()->composer('themes.' . env('APP_THEME') .'.email.dist.newsletter', function($view) use ($menu){
            $view->with('menu', $menu);
        });
    }

    /**
     * method used to return settings to all pages
     */
    private function composerSettings(){
        $settings = Cache::remember('settings', Helper::getMinutesToTheNextHour(), function (){
            return Setting::first();
        });
        view()->composer('themes.' . env('APP_THEME') .'.*', function($view) use ($settings){
            $view->with('settings', $settings);
        });
    }

    /**
     * method used to return beauty-box menu links
     */
    private function composerBeautyBoxMenu(){
        $menu = Cache::remember('beauty-box', Helper::getMinutesToTheNextHour(), function (){
            return MenuLink::tree(2);
        });
        view()->composer('themes.' . env('APP_THEME') .'.partials.beautybox.header', function($view) use ($menu){
            $view->with('menu', $menu);
        });
    }
}
