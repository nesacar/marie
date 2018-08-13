<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class DevController extends Controller {

  public function shop() {
    $latest = Post::getLatest(false);
    $most_views = Post::getViewed(false);
    return view('themes.' . env('APP_THEME') . '.pages.shop', compact('latest', 'most_views'));
  }

  public function search() {
    return view('themes.'.env('APP_THEME').'.pages.search-results');
  }
}
