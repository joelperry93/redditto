<?php namespace Redditto\Http\Controllers;

use Redditto\Http\Requests;
use Redditto\Http\Controllers\Controller;
use Redditto\Post;
use Redditto\Subreddit;
use Redditto\Comment;
use Auth;

use Illuminate\Http\Request;

class CommentController extends Controller {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Subreddit $subreddit, Post $post)
	{
	   $comment = new Comment;

       $comment->post_id   = $post->id;
       $comment->user_id   = Auth::user()->id;
       $comment->content   = $request->input('text');
       $comment->parent_id = $request->input('parentId', null);

       $comment->save();

       return Auth::user();

	}

}
