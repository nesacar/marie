<?php

namespace App\Http\Controllers\Web;

use App\Blog;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    /**
     * method used to return post page
     *
     * @param string $slug1 - present category slug
     * @param string $slug2 - present post slug
     * @param integer $id - present post id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function post($slug1, $slug2, $id){
        $post = Post::with('blog', 'user', 'gallery')->find($id);
        if(empty($post)) return redirect('/');
        $category = Blog::whereSlug($slug1)->first();
        $do_not_miss_it = Post::getDoNotMissIt($category, 6, 2);
        return view('themes.' . env('APP_THEME') . '.pages.article', compact('category', 'latest', 'do_not_miss_it', 'post'));
    }

    /**
     * method used to return sub post page
     *
     * @param string $slug1 - present parent parent category slug
     * @param string $slug2 - present parent child category slug
     * @param string $slug3 - present post slug
     * @param integer $id - present post id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function subPost($slug1, $slug2, $slug3, $id){
        $post = Post::with('blog', 'user', 'gallery')->find($id);
        if(empty($post)) return redirect('/');
        $category = Blog::whereSlug($slug2)->first();
        $do_not_miss_it = Post::getDoNotMissIt($category, 6, 2);
        return view('themes.' . env('APP_THEME') . '.pages.gallery', compact('category', 'latest', 'do_not_miss_it', 'post'));
    }
}
