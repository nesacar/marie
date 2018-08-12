<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletters';

    protected $fillable = ['title', 'verification', 'received', 'skip', 'send', 'active', 'last_send'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot(){
        parent::boot();

        static::deleting(function ($newsletter) {
            $newsletter->template()->delete();
            $newsletter->click()->delete();
        });
    }

    /**
     * method used to set newsletter
     *
     * @param $newsletter
     */
    public static function setNewsletter($newsletter){
        $newsletter->map(function($newsletter){
            foreach ($newsletter->template as $template){
                unset($template->id); unset($template->newsletter_id); unset($template->created_at); unset($template->updated_at);
                if($template->type == 'post'){
                    $template['post'] = Post::select('id', 'title', 'slug', 'image', 'short')->with('blog')->find($template->item1);
                    unset($template->type);
                    $template->component = 'leading-post';
                }elseif($template->type == 'posts'){
                    $template['post1'] = Post::select('id', 'title', 'slug', 'image', 'short')->with('blog')->find($template->item1);
                    $template['post2'] = Post::select('id', 'title', 'slug', 'image', 'short')->with('blog')->find($template->item2);
                    unset($template->type);
                    $template->component = 'two-posts';
                }else{
                    $template['banner'] = Banner::select('id', 'title', 'image')->find($template->item1);
                    unset($template->type);
                    $template->component = 'banner';
                }
            }

            return $newsletter;
        });
    }

    /**
     * method used to make belongs-to-many connection to Post model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function post(){
        return $this->belongsToMany(Post::class);
    }

    /**
     * method used to make belongs-to-many connection to Banner model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function banner(){
        return $this->belongsToMany(Banner::class);
    }

    /**
     * method used to make has-many connection to Newsletter_template model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function template(){
        return $this->hasMany(Newsletter_template::class);
    }


    /**
     * method used to make belongs-to-many connection between Newsletter and Click model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function click(){
        return $this->hasMany(Click::class);
    }
}
