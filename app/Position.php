<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
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
    protected $fillable = ['position_id', 'title', 'numero', 'class', 'is_visible'];

    /**
     * method used to set is_visible attribute
     *
     * @param $value
     */
    public function setIsVisibleAttribute($value){
        $this->attributes['is_visible'] = !empty($value)?: 0;
    }

    /**
     * method used to return banner position
     *
     * @param $positions
     * @param $title
     * @return null
     */
    public static function setBannerByPosition($positions, $title){
        $res = null;
        if(!empty($positions)){
            foreach ($positions as $position){
                if($position->title == $title){
                    return $position;
                }
            }
        }
        return $res;
    }

    /**
     * method use to centralise is visible Position logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query){
        return $query->where('is_visible', 1);
    }
}
