<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'as'   => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/download/podcasts/{podcast}', [
    'as' => 'podcasts.download',
    'uses' => 'DownloadPodcastsController@show'
]);

Route::resource('podcasts', 'PodcastsController');