<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd("namashkar");

        $name=Auth::user()->name;
        $posts =post::where('username',$name)->orderby('id','DESC')->get();
        return view('mypost.view',compact('posts'));

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
        $store=($request->all());
        $file= request()->file('img');
        // $store['img'] = $file->store('toPath',['disk'=>'public']);
        
        // $path2='image/'.$store['img'];
        // File::copy(base_path($path), public_path($path2));
        
        // echo "<img src=".$path.">";
        // dd($path);
        
        $store['img'] = $file->store('toPath',['disk'=>'public']);
        // $image=explode("/", $store['img'])[1];
        // $path1='C:/xampp/htdocs/img/toPath/'.$image;
        // File::copy('C:/xampp/htdocs/admin_laravel/storage/app/public/'.$store['img'],$path1);
        $submit = Post::create($store);
        return redirect()->route('home');
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
        post::destroy('id',$id);
        return Redirect::back();

    }
}
