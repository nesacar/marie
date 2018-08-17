<?php

namespace App;

use App\Traits\UploudableImageTrait;
use Illuminate\Database\Eloquent\Model;
use File;

class BeautyBox extends Model
{
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
    protected $fillable = ['title', 'slug', 'link', 'overtitle', 'subtitle', 'price', 'image', 'start_from', 'end_to', 'is_visible'];

    /**
     *method used when instance of this model is created
     */
    public static function boot(){
        parent::boot();

        static::deleting(function ($beauty_box) {
            if(!empty($beauty_box->image)) File::delete($beauty_box->image);
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
     * method use to centralise is visible Beauty Box logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query){
        return $query->where('is_visible', 1);
    }

    /**
     * method used to make belongs-to-many connection between BeautyBox and Product model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
