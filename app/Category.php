<?php

namespace App;

use App\Traits\UploudableImageTrait;
use Illuminate\Database\Eloquent\Model;
use File;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
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
    protected $fillable = ['title', 'slug', 'short', 'order', 'parent', 'level', 'image', 'is_visible'];

    /**
     * append to Blog model link attribute
     *
     * @var array
     */
    protected $appends = ['link'];

    /**
     *method used when instance of this model is created
     */
    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('parent', function (Builder $builder) {
            $builder->with('parentCategory');
        });

        self::deleting(function($category){
            self::where('parent', $category->id)->get()->each(function($item){
                $item->update(['parent' => 0]);
            });
        });

        static::deleting(function ($category) {
            if(!empty($category->image)) File::delete($category->image);
        });
    }

    /**
     * method used to set slug attribute
     *
     * @param $value
     */
    public function setSlugAttribute($value){
        $this->attributes['slug'] = str_slug($value);
    }

    /**
     * method used to set level attribute
     *
     * @param $value
     */
    public function setLevelAttribute($value){
        $this->attributes['level'] = !empty($value)? $value: 1;
    }

    /**
     * method used to set parent attribute
     *
     * @param $value
     */
    public function setParentAttribute($value){
        $this->attributes['parent'] = !empty($value)? $value: 0;
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
     * method used to set link attribute
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getLinkAttribute(){
        return url($this->getLink());
    }


    /**
     * method used to return blog link
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getLink(){
        return $this->parentCategory? 'shop/' . $this->parentCategory->slug . '/' . $this->slug . '/' : 'shop/' . $this->slug . '/';
    }

    /**
     * method used to return list of categories without parents
     *
     * @return mixed
     */
    public static function getNoParentCategoryList(){
        return self::where('parent', 0)->published()->orderBy('order', 'ASC')->pluck('title', 'id')->prepend('Izaberi kategoriju', 0);
    }

    /**
     * method used to save nested orders of categories
     *
     * @param $links
     * @param int $parent
     * @param int $level
     * @param int $order
     */
    public static function orderCategories($links, $parent = 0, $level = 1, $order = 0){
        if(count($links)>0){
            foreach ($links as $link){
                $old = self::find($link['id']);
                if(!empty($old) && ($old->parent != $parent || $old->order != ++$order || $old->level != $level)){
                    $old->update(['parent' => $parent, 'order' => $order, 'level' => $level]);
                }
                if(!empty($link['children'])){
                    self::orderCategories($link['children'], $link['id'], $level+1);
                }
            }
        }
    }

    /**
     * method used to return custom level deep tree of Blog model
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function tree($level=2) {
        return static::with(implode('.', array_fill(0, $level, 'children')))
            ->where('parent', 0)->orderBy('order', 'ASC')->visible()->get();
    }

    /**
     * method use to centralise is visible Blog logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query){
        return $query->where('is_visible', 1);
    }

    /**
     * method used to make has-one connection to parent Category model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function parentCategory() {
        return $this->hasOne(self::class, 'id', 'parent');
    }

    /**
     * method used to make has-many connection to children blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children() {
        return $this->hasMany(self::class, 'parent', 'id');
    }

    /**
     * method used to make belongs-to-many connection between Category and Product model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
