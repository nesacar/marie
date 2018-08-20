<?php

namespace App;

use App\Traits\SearchableTraits;
use App\Traits\UploudableImageTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use UploudableImageTrait, SearchableTraits;

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
    protected $fillable = ['user_id', 'author', 'title', 'slug', 'short', 'content', 'image', 'image_box', 'publish_at', 'views', 'slider', 'is_visible'];

    /**
     * append to Post model crop_image and link attribute
     *
     * @var array
     */
    protected $appends = ['crop_image', 'link'];

    /**
     * The attributes that are dates
     *
     * @var array
     */
    protected $dates = ['publish_at'];

    /**
     * The attributes that are use for search
     *
     * @var array
     */
    protected static $searchable = ['title', 'blog'];

    /**
     * set post limitation in months
     * example ($limited = 3) presents posts that were created less than 3 months ago
     * example ($limited = 0) presents all created posts
     *
     * @var int
     */
    protected static $limited = 6;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot(){
        parent::boot();

        static::addGlobalScope('blog', function (Builder $builder) {
            $builder->with('blog');
        });

        static::deleting(function ($post) {
            if(!empty($post->image)) File::delete($post->image);
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
     * method used to set link attribute
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getLinkAttribute(){
        return url($this->getLink());
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
     * method used to set slider attribute
     *
     * @param $value
     */
    public function setSliderAttribute($value){
        $this->attributes['slider'] = !empty($value)?: 0;
    }

    /**
     * method user to return crop_image attribute
     *
     * @return mixed
     */
    public function getCropImageAttribute(){
        return \Imagecache::get($this->image, '800x342')->src;
    }

    /**
     * method used to set request('blog') value for search posts
     *
     * @return array
     */
    public static function setBlogValue(){
        request()->merge(['blog' => request('list')]);
    }

    /**
     * method used to return slider posts to homepage
     *
     * @param int $limit
     * @return mixed
     */
    public static function getSlider($limit=4){
        return Cache::remember('home.slider', Helper::getMinutesToTheNextHour(), function () use ($limit){
            return self::with('blog')->where('slider', 1)->orderBy('publish_at', 'DESC')->visible()->take($limit)->get();
        });
    }

    /**
     * method used to return latest posts to homepage
     *
     * @param int $limit
     * @return mixed
     */
    public static function getLatest($category=false, $limit=7){
        if($category){
            return Cache::remember($category->slug . '.latest', Helper::getMinutesToTheNextHour(), function () use ($category, $limit){
                return $category->post()->with('blog')->orderBy('publish_at', 'DESC')->visible()->paginate($limit);
            });
        }else{
            return Cache::remember('home.latest', Helper::getMinutesToTheNextHour(), function () use ($limit){
                return self::with('blog')->orderBy('publish_at', 'DESC')->visible()->paginate($limit);
            });
        }
    }

    /**
     * method used to return most viewed posts to homepage
     *
     * @param int $limit
     * @return mixed
     */
    public static function getViewed($category=false, $limit=4){
        if($category){
            return Cache::remember($category->slug . '.viewed', Helper::getMinutesToTheNextHour(), function () use ($category, $limit){
                return $category->post()->with('blog')->orderBy('views', 'DESC')->visible()->take($limit)->get();
            });
        }else{
            return Cache::remember('home.viewed', Helper::getMinutesToTheNextHour(), function () use ($limit){
                return self::with('blog')->orderBy('views', 'DESC')->visible()->take($limit)->get();
            });
        }
    }

    /**
     * method used to return most do not miss it posts
     * I'm not sure which logic should be here, but we can change it later
     *
     * @param int $limit
     * @return mixed
     */
    public static function getDoNotMissIt($category=false, $limit=6, $months=2){
        if($category){
            return Cache::remember($category->slug . '.do_not_miss_it', Helper::getMinutesToTheNextHour(), function () use ($category, $limit, $months){
                return $category->post()->with('blog')->where('publish_at', '>', Carbon::now()->subMonth($months))->take($limit)->get();
            });
        }else{
            return Cache::remember('home.do_not_miss_it', Helper::getMinutesToTheNextHour(), function () use ($limit, $months){
                return self::with('blog')->where('publish_at', '>', Carbon::now()->subMonth($months))->inRandomOrder()->take($limit)->get();
            });
        }
    }

    /**
     * method used to return Newsletter post cached for 5 minutes
     *
     * @param $post_id
     * @return mixed
     */
    public static function getNewsletterPost($post_id){
        return Cache::remember('newsletter_post.' . $post_id, 5, function () use ($post_id){
            return self::with('blog')->find($post_id);
        });
    }

    /**
     * method used to return post link
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getLink(){
        return $this->blog->first()->getLink() . $this->slug . '/' . $this->id;
    }

    /**
     * method used to return gallery post link
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getGalleryLink($image=1){
        return 'galerija/' . $this->getLink() . '?image=' . $image;
    }

    /**
     * method used to return images post link
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public function getImagesLink(){
        return 'slike/' . $this->getLink();
    }

    /**
     * method used to insert Newsletter clicks
     *
     * @param $post
     */
    public static function newsletterClick($post){
        if(request('email') && request('news')){
            $newsletter = Newsletter::where('verification', request('news'))->first();
            $subscriber = Subscriber::where('verification', request('email'))->first();
            if(isset($newsletter) && isset($subscriber)){
                Click::insertClick($newsletter->id, $post->id, false, $subscriber->id);
            }
        }
    }

    /**
     * method use to centralise is visible Post logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeVisible($query){
        return $query->where('is_visible', 1)->where('publish_at',  '<=', Carbon::now()->format('Y-m-d H:00'))->orderBy('publish_at', 'DESC');
    }

    /**
     * method use to centralise limited months Banner logic
     *
     * @param $query
     * @return mixed
     */
    public function scopeLimited($query){
        if(self::$limited > 0){
            return $query->where('publish_at', '>=', Carbon::now()->subMonth(self::$limited)->format('Y-m-d H:00'));
        }
    }

    /**
     * method used to make belongs-to-many connection between Post and Blog model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function blog(){
        return $this->belongsToMany(Blog::class)->orderBy('parent', 'ASC');
    }


    /**
     * method used to make belongs-to connection between Post and User model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * method used to make belongs-to-many connection between Post and User model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }

    /**
     * method used to make morph-many connection between Post and Gallery model
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function gallery(){
        return $this->morphMany(Gallery::class, 'gallery')->orderBy('order', 'ASC');
    }


    /**
     * method used to make belongs-to-many connection between Post and Click model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function click(){
        return $this->hasMany(Click::class);
    }
}
