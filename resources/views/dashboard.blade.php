@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
   
        <!-- <div class="row py-3">
            <div class="col-4">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{url('storage/'.Auth::user()->img)}}">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

            <!-- <div class="w-full p-4 px-5 py-5">
                <ul class="flex space-x-4 overflow-hidden">
                    <li class="flex flex-col items-center">
                        <div class="rounded-full bg-gradient-to-br from-yellow-200 to-red-500 p-1"> <a href="#" class="bg-white p-1 rounded-full block transform transition hover:rotate-6"> <img src="{{url('storage/'.Auth::user()->img)}}" class="rounded-full" width="60"> </a> </div> <span class="text-sm w-16 overflow-hidden overflow-ellipsis">riksy_stam143543</span>
                    </li>
                    <li class="flex flex-col items-center">
                        <div class="rounded-full bg-gradient-to-br from-yellow-200 to-red-500 p-1"> <a href="#" class="bg-white p-1 rounded-full block transform transition hover:rotate-6"> <img src="{{url('storage/'.Auth::user()->img)}}" class="rounded-full" width="60"> </a> </div> <span class="text-sm w-16 overflow-hidden overflow-ellipsis">tina_2342</span>
                    </li>
                    <li class="flex flex-col items-center">
                        <div class="rounded-full bg-gradient-to-br from-yellow-200 to-red-500 p-1"> <a href="#" class="bg-white p-1 rounded-full block transform transition hover:rotate-6"> <img src="{{url('storage/'.Auth::user()->img)}}" class="rounded-full" width="60"> </a> </div> <span class="text-sm w-16 overflow-hidden overflow-ellipsis">sujan_tomy</span>
                    </li>
                    <li class="flex flex-col items-center">
                        <div class="rounded-full bg-gradient-to-br from-yellow-200 to-red-500 p-1"> <a href="#" class="bg-white p-1 rounded-full block transform transition hover:rotate-6"> <img src="{{url('storage/'.Auth::user()->img)}}" class="rounded-full" width="60"> </a> </div> <span class="text-sm w-16 overflow-hidden overflow-ellipsis">rujanta_98432</span>
                    </li>
                    <li class="flex flex-col items-center">
                        <div class="rounded-full bg-gradient-to-br from-yellow-200 to-red-500 p-1"> <a href="#" class="bg-white p-1 rounded-full block transform transition hover:rotate-6"> <img src="{{url('storage/'.Auth::user()->img)}}" class="rounded-full" width="60"> </a> </div> <span class="text-sm w-16 overflow-hidden overflow-ellipsis">rony_dusak2</span>
                    </li>
                    <li class="flex flex-col items-center">
                        <div class="rounded-full bg-gradient-to-br from-yellow-200 to-red-500 p-1"> <a href="#" class="bg-white p-1 rounded-full block transform transition hover:rotate-6"> <img src="{{url('storage/'.Auth::user()->img)}}" class="rounded-full" width="60"> </a> </div> <span class="text-sm w-16 overflow-hidden overflow-ellipsis">tom_hank_fan</span>
                    </li>
                </ul>
            </div> -->
<style type="text/css">

    .story-container ul{
        list-style-type: none;
        user-select: none;
        display: flex;
        overflow-y: auto;
        padding: 20px 0;
        background-color: #27293d;
        width: 97%;
        margin-left: 13px;
        border-radius: 5px;
    }
    .story-container ul li{
        padding: 0 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .story-container ul li:first-child{
        padding-left: 20px;
    }
    .story-container ul li:last-child{
        padding-right: 20px;
    }
    .story-container ul li .story{
        padding:1px;
        width: 77px;
        height: 77px;
        border-radius: 50%;
        background: rgba(255,255,255,.75);
        position: relative;
    }
    .story-container ul li.has-story .story{
        padding: 2px;
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    }
    .story-container ul li .story img{
        padding: 2px;
        background: currentColor;
        border-radius: 50%;
        width: 100%;
        height: 100%;
    }
    .story-container ul li span{
        color: rgba(255,255,255,.85);
        font-weight: 300;
        font-size: 15px;
        max-width: 85px;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 5px;
    }
</style>

<div class="story-container">
    <ul>
        @foreach($users as $user)
        <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">{{$user->name}}</span>
        </li>
        @endforeach
    </ul>
</div>
        <!-- <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">your story</span>
        </li>
        <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">your story</span>
        </li>
        <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">your story</span>
        </li>
        <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">your story</span>
        </li>
        <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">your story</span>
        </li>
        <li class="has-story">
            <div class="story">
                <img src="{{url('storage/'.Auth::user()->img)}}">
            </div>
            <span class="user">your story</span>
        </li> -->







<div class="row">
        <div class="col-12">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @foreach($posts as $post)
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-1">
                                            <img src="{{url('storage/'.$post->user_img)}}" class="rounded-circle" width="50px" height="50px">
                                        </div>
                                        <div class="col-11">
                                            <h5>{{$post->username}}</h5>
                                            <h5>{{$post->created_at}}</h5>
                                        </div>
                                    </div>


                                </div>

                                <div class="card-body">
                                    <h5>{{$post->caption}}</h5>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                <div class="d-flex align-items-center" style="display: block;margin: 0 auto;">
                                    {{--                    <img src="{{asset($post->img) }}">--}}
                                    <img src="{{url('storage/'.$post->img)}}" width="80%" style="display: block;margin: 0 auto;" />
                                </div>
                            </div>
                                <div class="card-footer text-right">
                                    <a href="{{route('Comment.show',$post->id)}}" class="btn btn-primary btn-sm">{{\App\Comment::where('post_id',$post->id)->count()}} <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="float" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus my-float"></i>
    </a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ Auth::user()->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Post.store')}} " method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="username" value="{{Auth::user()->name }}" hidden>
                        <input type="text" name="user_img" value="{{Auth::user()->img }}" hidden>
                        <div class="form-group">
                            <label for="Password">Caption</label>
                            <input type="text" class="form-control" name="caption" id="Password" placeholder="Enter Caption" required="">
                        </div>
                        <div class="form-group">
                            <label>Upload photo</label>
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                            <span class="text-danger"></span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="reset" class="btn btn-block btn-danger">Cancel</button>
                            </div>
                            <div class="col">
                                <button type="submit" name="post" class="btn btn-block btn-primary">Post</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
