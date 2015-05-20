<?php namespace Redditto\Http\Controllers;

use Redditto\Http\Requests;
use Redditto\Http\Controllers\Controller;
use Redditto\User;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function show(User $user) 
    {
        return view('user.show', ['user' => $user]);
    }

}
