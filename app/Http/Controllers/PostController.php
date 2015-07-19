<?php namespace Redditto\Http\Controllers;

use Redditto\Http\Requests;
use Redditto\Http\Controllers\Controller;
use Redditto\Post;
use Redditto\Subreddit;

use Illuminate\Http\Request;

class PostController extends Controller {

	public function show(Subreddit $subreddit, Post $post)
	{
		return view('post.show')->with(['post' => $post]);
	}

}