<?php

/**
 * home page route
 **/
Route::get('/', 'Web\HomePageController@homepage');

/**
 * web subscribers routes
 */
Route::post('subscribe', 'Web\Admin\SubscribersController@subscribe')->name('newsletter.subscribe');
Route::get('subscribe/logout', 'Web\Admin\SubscribersController@subscriberLogout');

/**
 * Newsletter banner preview
 */
Route::get('banners/click/{id}', 'Web\Admin\BannersController@click');

/**
 * Newsletter preview
 */
Route::get('newsletter/preview', 'Web\Admin\NewslettersController@newsletterPreview');

/**
 * gallery page routes
 **/
Route::get('galerija/{category}/{post}/{id}', 'Web\GalleriesController@gallery');
Route::get('galerija/{category1}/{category2}/{post}/{id}', 'Web\GalleriesController@subGallery');

/**
 * images page routes
 **/
Route::get('slike/{category}/{post}/{id}', 'Web\ImagesController@images');
Route::get('slike/{category1}/{category2}/{post}/{id}', 'Web\ImagesController@subImages');

/**
 * shop page routes
 **/
Route::get('shop', 'Web\ShopsController@shop');
Route::get('shop/{category}', 'Web\ShopsController@shopCategory');
Route::get('shop/{category1}/{category2}', 'Web\ShopsController@shopSubCategory');

/**
 * Search results helper route.
 */
Route::get('/search-results', 'DevController@search');

/**
 * filemanager route
 **/
Route::middleware('auth')->get('filemanager/show', 'FilemanagerController@index');

/**
 * auth routes
 */
Auth::routes();

/**
 * admin dashboard route
 **/
Route::get('admin', function () {
    return view('layouts.admin-app');
});

/**
 * beauty-box page route
 */
Route::get('marie-clarie-preporucuje', 'Web\BeautyBoxesController@beautyBox');
Route::get('marie-clarie-preporucuje/{category}', 'Web\BeautyBoxesController@beautyBoxCategory');

/**
 * category page routes
 **/
Route::get('{category}', 'Web\BlogsController@category');
Route::get('{category1}/{category2}', 'Web\BlogsController@subCategory');

/**
 * post page routes
 **/
Route::get('{category}/{post}/{id}', 'Web\PostsController@post');
Route::get('{category1}/{category2}/{post}/{id}', 'Web\PostsController@subPost');

