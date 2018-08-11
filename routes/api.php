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

    Route::get('banners/lists', 'Api\BannersController@lists');
    Route::resource('banners', 'Api\BannersController');

    Route::resource('beauty-boxes', 'Api\BeautyBoxesController');

    Route::get('brands/lists', 'Api\BrandsController@lists');
    Route::resource('brands', 'Api\BrandsController');

    Route::get('blogs/tree', 'Api\BlogsController@tree');
    Route::get('blogs/lists', 'Api\BlogsController@lists');
    Route::resource('blogs', 'Api\BlogsController');

    Route::get('categories/tree', 'Api\CategoriesController@tree');
    Route::get('categories/sort', 'Api\CategoriesController@sort');
    Route::get('categories/lists', 'Api\CategoriesController@lists');
    Route::post('categories/order', 'Api\CategoriesController@saveOrder');
    Route::resource('categories', 'Api\CategoriesController');

    Route::get('clicks/{newsletter_id}/posts/{post_id}', 'Api\ClicksController@post');
    Route::get('clicks/{newsletter_id}/banners/{banner_id}', 'Api\ClicksController@banner');

    Route::get('clicks/{newsletter_id}/posts/{post_id}/clicks', 'Api\ClicksController@postClicks');
    Route::get('clicks/{newsletter_id}/banners/{banner_id}/clicks', 'Api\ClicksController@bannerClicks');

    Route::get('galleries/{post_id}', 'Api\GalleriesController@show');
    Route::post('galleries/{post_id}', 'Api\GalleriesController@update');
    Route::post('galleries/{post_id}/serialize', 'Api\GalleriesController@serialize');
    Route::post('galleries/{id}/destroy', 'Api\GalleriesController@destroy');

    Route::resource('menus', 'Api\MenusController');

    Route::get('menu-links/lists', 'Api\MenuLinksController@lists');
    Route::resource('menu-links', 'Api\MenuLinksController');
    Route::get('menu-links/{id}/sort', 'Api\MenuLinksController@sort');
    Route::post('menu-links/{id}/order', 'Api\MenuLinksController@saveOrder');

    Route::resource('newsletters', 'Api\NewslettersController');
    Route::get('newsletters/{id}/post', 'Api\NewslettersController@post');
    Route::get('newsletters/{id}/banner', 'Api\NewslettersController@banner');
    Route::post('newsletters/{id}/prepare', 'Api\NewslettersController@prepare');
    Route::post('newsletters/{id}/send', 'Api\NewslettersController@send');

    Route::get('partners/lists', 'Api\PartnersController@lists');
    Route::resource('partners', 'Api\PartnersController');

    Route::resource('permissions', 'Api\PermissionsController');

    Route::get('permission-groups/lists', 'Api\PermissionGroupsController@lists');
    Route::resource('permission-groups', 'Api\PermissionGroupsController');

    Route::get('posts/lists', 'Api\PostsController@lists');
    Route::resource('posts', 'Api\PostsController');
    Route::post('posts/search', 'Api\PostsController@search');
    Route::get('posts/{id}/gallery', 'Api\PostsController@gallery');
    Route::post('posts/{id}/gallery', 'Api\PostsController@galleryUpdate');

    Route::resource('products', 'Api\ProductsController');
    Route::post('products/search', 'Api\ProductsController@search');

    Route::get('roles/lists', 'Api\RolesController@lists');
    Route::resource('roles', 'Api\RolesController');
    Route::post('roles/{id}/permissions', 'Api\RolesController@permissions');

    Route::resource('settings', 'Api\SettingsController');

    Route::get('statistics/{id}/day', 'Api\StatisticsController@day');
    Route::get('statistics/{id}/month', 'Api\StatisticsController@month');
    Route::get('statistics/{id}/year', 'Api\StatisticsController@year');

    Route::resource('subscribers', 'Api\SubscribersController');

    Route::resource('tags', 'Api\TagsController');
    Route::post('tags/search', 'Api\TagsController@search');

    Route::resource('users', 'Api\UsersController');
    Route::post('users/{id}/change-password', 'Api\UsersController@changePassword');

    Route::get('user', function (Request $request) {
        return $request->user()->load('role');
    });

});
