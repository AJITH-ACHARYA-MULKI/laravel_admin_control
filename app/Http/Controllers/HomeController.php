<?php

namespace App\Http\Controllers;

use App\post;
use App\user;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts= post::orderby('id','DESC')->get();
        $users=user::all();
        return view('dashboard',compact('posts','users'));
    }
}
