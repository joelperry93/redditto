<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Subreddit;

use Illuminate\Http\Request;

class PostController extends Controller {

	public function show(Subreddit $subreddit, Post $post)
	{
		return view('post.show', ['post' => $post]);
	}

}
