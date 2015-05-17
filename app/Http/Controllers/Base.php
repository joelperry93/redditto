<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Base extends Controller {

    public function __construct()
    {
        parent::__construct();

        View::share([
            'subreddits' => DB::table('subeddits')->all()
       ]);
    }

}