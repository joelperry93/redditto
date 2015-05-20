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
use Redditto\Subreddit;
use Redditto\Post;
use Redditto\User;

Route::bind('subreddit', function ($value, $route) {
    return Subreddit::where('name', $value)->first();
});

Route::bind('post', function ($value, $route) {
    return Post::where('slug', $value)->first();
});

Route::bind('user', function ($value, $route) {
    return User::where('name', $value)->first();
});

Route::get('/', 'FrontPageController@index');
Route::get('@{user}', 'UserController@show');
Route::get('/{subreddit}', 'SubredditController@show');
Route::get('/{subreddit}/{post}', 'PostController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
