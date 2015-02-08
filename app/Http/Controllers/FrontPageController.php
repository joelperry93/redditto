<?php namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontPageController extends Controller {

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
        return view('frontpage')->with([
            'posts' => Post::with('subreddit')->get()
        ]);
    }

}
