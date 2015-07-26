<?php

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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', 'FrontPageController@index');
Route::get('@{user}', 'UserController@show');
Route::get('/{subreddit}', 'SubredditController@show');
Route::get('/{subreddit}/{post}', 'PostController@show');

Route::post('/{subreddit}/{post}/comment', 'CommentController@store');

