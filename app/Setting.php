<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UploudableImageTrait;
use Illuminate\Support\Facades\Cache;

class Setting extends Model{

    use UploudableImageTrait;

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [
        'title', 'address', 'keywords', 'desc', 'footer', 'phone1', 'phone2', 'email1', 'email2', 'facebook', 'twitter', 'instagram', 'pinterest', 'google',
        'magazine_title', 'magazine_link', 'magazine_image', 'youtube', 'analytics', 'map'
    ];

    public static function get(){
        return Cache::remember('settings', Helper::getMinutesToTheNextHour(), function () {
            return self::find(1);
        });
    }
}
