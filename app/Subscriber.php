<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    /**
     * paginate number
     *
     * @var integer
     */
    public static $paginate = 50;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'verification', 'block'];

    /**
     * method used to set block attribute
     *
     * @param $value
     */
    public function setBlockAttribute($value){
        $this->attributes['block'] = !empty($value)?: 0;
    }


    /**
     * method used to make belongs-to-many connection between Subscriber and Click model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function click(){
        return $this->hasMany(Click::class);
    }

}
