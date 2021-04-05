<?php

namespace App\Http\Controllers;

use App\post;

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
        return view('dashboard',compact('posts'));
    }
}
