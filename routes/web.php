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
    'as'   => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/podcasts', [
    'as'   => 'podcasts_path',
    'uses' => 'PodcastsController@index'
]);

Route::get('/podcasts/{podcast}', [
    'as'   => 'podcast_path',
    'uses' => 'PodcastsController@show'
]);
