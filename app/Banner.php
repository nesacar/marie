<?php

namespace App;

use App\Traits\UploudableImageTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use File;
use Illuminate\Support\Facades\Cache;

class Banner extends Model{

    use UploudableImageTrait;

    /**
     * paginate number
     *
     * @var integer
     */
    public static $paginate = 50;

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['title', 'link', 'image', 'width', 'height', 'is_visible'];

    /**
     * set banner limitation in months
     * example ($limited = 3) presents banners that were created less than 3 months ago
     * example ($limited = 0) presents all created banners
     *
     * @var int
     */
    protected static $limited = 6;

    /**
     *method used when instance of this model is created
     */
    public static function boot(){
        parent::boot();

        static::deleting(function ($post) {
            if(!empty($post->image)) File::delete($post->image);
        });
    }

    /**
     * method used to set is_visible attribute
     *
     * @param $value
     */
    public function setIsVisibleAttribute($value){
        $this->attributes['is_visible'] = !empty($value)?: 0;
    }


    /**
     * method used to return Newsletter banner cached for 5 minutes
     *
     * @param $post_id
     * @return mixed
     */
    public static function getNewsletterBanner($banner_id){
        return Cache::remember('newsletter_banner.' . $banner_id, 5, function () use ($banner_id){
            return self::find($banner_id);
        });
    }

    /**
     * method use to centralise is visible Banner logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query){
        return $query->where('is_visible', 1);
    }

    /**
     * method use to centralise limited months Banner logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeLimited($query){
        if(self::$limited > 0){
            return $query->where('created_at', '>=', Carbon::now()->subMonth(self::$limited)->format('Y-m-d H:00'));
        }
    }

    /**
     * method used to make belongs-to-many connection between Banner and Click model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function click(){
        return $this->hasMany(Click::class);
    }
}
