<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->group(function () {

    Route::resource('banners', 'Api\BannersController');

    Route::get('blogs/tree', 'Api\BlogsController@tree');
    Route::resource('blogs', 'Api\BlogsController');

    Route::resource('posts', 'Api\PostsController');
    Route::post('posts/search', 'Api\PostsController@search');

    Route::resource('settings', 'Api\SettingsController');

    Route::resource('subscribers', 'Api\SubscribersController');

    Route::resource('tags', 'Api\TagsController');
    Route::post('tags/search', 'Api\TagsController@search');

    Route::resource('users', 'Api\UsersController');
    Route::post('users/{id}/change-password', 'Api\UsersController@changePassword');

    Route::get('user', function (Request $request) {
        return $request->user();
    });

});
