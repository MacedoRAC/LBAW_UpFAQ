<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'homepage', 'uses'=>'PagesController@index']);

Route::get('/profile', ['as'=>'profile', 'uses'=>'PagesController@show_perfil']);

Route::get('/search', ['as'=>'search', 'uses'=>'PagesController@search']);

Route::get('/question', ['as'=>'showQuestion', 'uses'=>'QuestionsController@show']);