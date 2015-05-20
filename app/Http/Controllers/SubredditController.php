<?php namespace Redditto\Http\Controllers;

use Redditto\Http\Requests;
use Redditto\Http\Controllers\Controller;
use Redditto\Subreddit;

use Illuminate\Http\Request;

class SubredditController extends Controller {

	public function show(Subreddit $subreddit) 
    {
        return view('subreddit.show')->with(['subreddit' => $subreddit]);
    }

}
