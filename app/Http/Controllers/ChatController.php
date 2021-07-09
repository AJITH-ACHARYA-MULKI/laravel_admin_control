<?php

namespace App\Http\Controllers;

use App\Chat;
use App\post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $send_id = Auth::user()->id;
        $users= User::where('id','!=',$send_id)->get();

        $rec = User::where('id','!=',$send_id)->first();
        $chats=Chat::where('rec_id',$rec->id)->where('send_id',$send_id)->orwhere('rec_id',$send_id)->where('send_id',$rec->id)->get();
        $last_msg=Chat::where('rec_id',$send_id)->orwhere('send_id',$send_id)->orderby('id','DESC')->get();
        // dd($last_msg);
        return view('chat.view', compact('users','rec','chats','last_msg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // dd($request->all());
        $store = ($request->all());
        unset($store['_token']);
        $update =Chat::create($store);
        return Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $send_id = Auth::user()->id;
        $users= User::where('id','!=',$send_id)->get();
        $rec = User::where('id',$id)->first();
        $chats=Chat::where('rec_id',$id)->where('send_id',$send_id)->orwhere('rec_id',$send_id)->where('send_id',$id)->get();
        $last_msg=Chat::orderby('id','DESC')->get();
        return view('Chat.view', compact('users','rec','chats','last_msg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
