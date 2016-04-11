<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

class UserController extends Controller
{
    //
    public function user()
    {
    	$id = Auth::user()->id;
        $currentUser = User::find($id);
    	return view('user', ['user' => $currentUser]);
    }
}
