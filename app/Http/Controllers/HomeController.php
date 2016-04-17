<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Location;
use App\User;
use App\Message;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $id = Auth::user()->id;
            $currentUser = User::find($id);
            $messages = $currentUser->messages;
            return view('show_message', ['messages'=>$messages, 'name' => $currentUser->name]);
        }
    }

    public function getMsg()
    {
        if(Auth::check())
        {
            $locations = Location::all();
            return view('message', ['locations' => $locations]);
        }
    }

    public function postMsg(Request $request)
    {
        if(Auth::check())
        {
            $location_id = $request->input('location_id');
            $message = $request->input('message');
            $id = Auth::user()->id;

            Message::create([
                'user_id' => $id,
                'location_id'=> $location_id,
                'content' => $message,
                'likes' => 0,
            ]);
            return view('home');
        }
    }
}
