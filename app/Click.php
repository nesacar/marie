<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;

class Click extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clicks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['newsletter_id', 'post_id', 'banner_id', 'subscriber_id'];

    /**
     * method used to inset click
     *
     * @param int $newsletter_id
     * @param int $post_id
     * @param int $banner_id
     * @param int $subscriber_id
     */
    public static function insertClick($newsletter_id, $post_id, $banner_id, $subscriber_id){
        $click = new Click();
        if($post_id){
            $click->post_id = $post_id;
            $click->banner_id = 0;
        }else{
            $click->post_id = 0;
            $click->banner_id = $banner_id;
        }
        $click->newsletter_id = $newsletter_id;
        $click->subscriber_id = $subscriber_id;
        $click->save();
    }

    /**
     * method used to return banner clicks
     *
     * @param int $newslellter_id
     * @param int $banner_id
     * @return mixed
     */
    public static function getBannerClicks($newslellter_id, $banner_id){
        return self::select('*', DB::raw('COUNT(*) as click', 'subscribers.email as email'))
            ->join('subscribers', 'clicks.subscriber_id', '=', 'subscribers.id')
            ->where('clicks.banner_id', $banner_id)->where('clicks.newsletter_id', $newslellter_id)
            ->groupBy('clicks.subscriber_id')->orderbyRaw('click DESC')
            ->paginate(50);
    }

    /**
     * method used to return post clicks
     *
     * @param $newslellter_id
     * @param $post_id
     * @return mixed
     */
    public static function getPostClicks($newslellter_id, $post_id){
        return self::select('*', DB::raw('COUNT(*) as click', 'subscribers.email as email'))
            ->join('subscribers', 'clicks.subscriber_id', '=', 'subscribers.id')
            ->where('clicks.post_id', $post_id)->where('clicks.newsletter_id', $newslellter_id)
            ->groupBy('clicks.subscriber_id')->orderbyRaw('click DESC')
            ->paginate(50);
    }

    /**
     * method used to make belongs-to connection between Click and Newsletter model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newsletter(){
        return $this->belongsTo(Newsletter::class);
    }

    /**
     * method used to make belongs-to connection between Click and Post model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post(){
        return $this->belongsTo(Post::class);
    }

    /**
     * method used to make belongs-to connection between Click and Banner model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function banner(){
        return $this->belongsTo(Banner::class);
    }

    /**
     * method used to make belongs-to connection between Click and Subscriber model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriber(){
        return $this->belongsTo(Subscriber::class);
    }
}
