@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
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
