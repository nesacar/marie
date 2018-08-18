<?php

namespace App;

use App\Traits\UploudableImageTrait;
use Illuminate\Database\Eloquent\Model;

class Video extends Model{

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
    protected $fillable = ['blog_id', 'title', 'href', 'image', 'order', 'is_visible'];

    /**
     * The attributes that are appended
     *
     * @var array
     */
    protected $appends = ['src',];

    /**
     * method used to set src attribute
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getSrcAttribute(){
        return url(\Imagecache::get($this->image, '218x132')->src);
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
     * method use to centralise is visible Video logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query){
        return $query->where('is_visible', 1);
    }

    /**
     * method used to make belongs-to connection between Video and Blog model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
