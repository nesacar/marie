<?php

/**
 * home page route
 **/
Route::get('/', 'Web\HomePageController@homepage');

/**
 * Vladan's routes
 */
Route::get('beautybox', 'DevController@beautyBox');

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
 * category page routes
 **/
Route::get('{category}', 'Web\BlogsController@category');
Route::get('{category1}/{category2}', 'Web\BlogsController@subCategory');

/**
 * post page routes
 **/
Route::get('{category}/{post}/{id}', 'Web\PostsController@post');
Route::get('{category1}/{category2}/{post}/{id}', 'Web\PostsController@subPost');

/**
 * test route
 */
Route::get('test', 'TestController@index');


