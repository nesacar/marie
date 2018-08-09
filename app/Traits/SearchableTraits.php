<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

trait SearchableTraits
{

    /**
     * method used to search model
     *
     * @return mixed
     */
    protected static function search($category_id=false)
    {
        $query = self::query();
        foreach (request()->all() as $key => $attribute) {
            if (in_array($key, self::$searchable)) {
                $query->$key($attribute);
            }
        }

        if($category_id){
            $query->category($category_id);
        }

        return $query;
    }

    /**
     * method used to search model by title
     *
     * @param Builder $query
     * @param $text
     * @return mixed
     */
    public function scopeTitle(Builder $query, $text)
    {
        return $query->where(function ($query) use ($text){
            if($text != ''){
                $query->where('title', 'like', '%'.$text.'%')->orWhere('slug', 'like', '%'.$text.'%');
            }
        });
    }

    /**
     * method used to search model by blog
     *
     * @param Builder $query
     * @param $blog
     * @return mixed
     */
    public function scopeBlog(Builder $query, $blog)
    {
        if(!empty($blog)){
            return $query->join('blog_post', 'posts.id', '=', 'blog_post.post_id')
                ->where('blog_post.blog_id', $blog);
        }
    }

    /**
     * method used to search model by category
     *
     * @param Builder $query
     * @param $category
     * @return mixed
     */
    public function scopeCategory(Builder $query, $category)
    {
        if(!empty($category)){
            return $query->join('category_product', 'products.id', '=', 'category_product.product_id')
                ->where('category_product.category_id', $category);
        }
    }

    /**
     * method used to search model by brand ids
     *
     * @param Builder $query
     * @param int $brand_ids
     * @return Builder
     */
    public function scopeBrands(Builder $query, $brand_ids){
        if(!empty($brand_ids)){
            return $query->whereIn('products.brand_id', $brand_ids);
        }
    }

    /**
     * method used to search model by gender ids
     *
     * @param Builder $query
     * @param int $gender_ids - present array of genders
     * @return Builder
     */
    public function scopeGenders(Builder $query, $gender_ids){
        if(!empty($gender_ids)){
            return $query->whereIn('products.gender_id', $gender_ids);
        }
    }

    /**
     * method used to search model by prices
     *
     * @param Builder $query
     * @param array $prices - present array of min and max prices
     * @return Builder
     */
    public function scopePrices(Builder $query, $prices){
        if(!empty($prices['min']) && !empty($prices['max'])){
            return $query->whereBetween('products.price', [$prices['min'], $prices['max']]);
        }
    }

}