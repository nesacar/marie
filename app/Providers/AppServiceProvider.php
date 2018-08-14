<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Queue::after(function (JobProcessed $event) {
            // $event->connectionName
            // $event->job
            // $event->job->payload()
            if($event->job->resolveName() == 'App\Jobs\ProcessNewsletter'){
                Log::info('newsletter was sent');
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $components = 'themes.' . env('APP_THEME') . '.components';

        Blade::component($components.'.article-teaser', 'article_teaser');
        Blade::component($components.'.related-item', 'related_item');
        Blade::component($components.'.image-gallery', 'image_gallery');

        Blade::component($components.'.beautybox.hero', 'beautybox_hero');
        Blade::component($components.'.beautybox.product', 'beautybox_product');
        Blade::component($components.'.beautybox.partner', 'beautybox_partner');

        Blade::component($components.'.shop.product', 'shop_product');
    }
}
