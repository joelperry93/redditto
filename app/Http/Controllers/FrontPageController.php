<?php namespace Redditto\Http\Controllers;

use Redditto\Post;
use Redditto\Http\Requests;
use Redditto\Http\Controllers\Base;

use Illuminate\Http\Request;

class FrontPageController extends Base {

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index(Post $posts)
    {
        return view('frontpage.show')->with([
            'posts' => Post::with('subreddit')->get()
        ]);
    }

}
