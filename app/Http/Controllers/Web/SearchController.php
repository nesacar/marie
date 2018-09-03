<?php

namespace App\Http\Controllers\Web;

use App\Post;
use App\Seo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * method used to return search page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function search(){
        $text = request('text');
        if(empty($text)) return redirect('/');
        $posts = Post::where('title', 'like', '%' . $text . '%')->orWhere('slug', 'like', '%' . $text . '%')->orWhere('short', 'like', '%' . $text . '%')->visible()->latest()->take(12)->get();
        $latest = Post::getLatest(false, 8);
        Seo::search(request('text'));
        return view('themes.' . env('APP_THEME') . '.pages.search-results', compact('text', 'posts', 'latest'));
    }
}
