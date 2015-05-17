<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subreddit;

use Illuminate\Http\Request;

class SubredditController extends Controller {

	public function show(Subreddit $subreddit) 
    {
        return view('subreddit.show')->with(['subreddit' => $subreddit]);
    }

}
