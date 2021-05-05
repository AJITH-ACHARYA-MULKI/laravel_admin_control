@extends('layouts.app', ['pageSlug' => 'mypost'])
@section('content')
    @foreach($posts as $post)
        <div id="comments" style="margin: auto;">
            <div class="row ">
                <div class="col-md-12">
                        <div class="card mds-8">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="{{url('storage/'.Auth::user()->img)}}" class="avatar" width="70px" height="70px">
                                    </div>
                                    <div class="col-9">
                                        <a href="" class="text-light font-weight-600 text-sm">{{$post->username}}</a>
                                        <small class="d-block text-light">{{$post->created_at}}</small>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('Post.destroy',$post->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                DELETE
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center">--}}
{{--                                    <a href="">--}}
{{--                                        <img src="{{url('storage/'.Auth::user()->img)}}" class="avatar">--}}
{{--                                    </a>--}}
{{--                                    <div class="mx-3">--}}
{{--                                        <a href="" class="text-dark font-weight-600 text-sm">{{$post->username}}</a>--}}
{{--                                        <small class="d-block text-muted">{{$post->created_at}}</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="text-right ml-auto">--}}
{{--                                    <form action="{{route('Post.destroy',$post->id)}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('delete')--}}
{{--                                        <button type="submit" class="btn btn-danger btn-icon">--}}
{{--                                            DELETE--}}
{{--                                        </button>--}}
{{--                                    </form>--}}
{{--                                </div>--}} -->
                            </div>
                            <div class="card-body">
                                <p class="mb-4">{{$post->caption}}</p>
                                <div class="card-header d-flex align-items-center">
                                <div class="d-flex align-items-center" style="display: block;margin: 0 auto;">
                                    <img alt="Image placeholder" src="{{url('storage/'.$post->img)}}" width="70%"style="display: block;margin: 0 auto;">
                                </div></div>
                            </div>
                            <hr style="width:100% ; background-color: #8cfcdc; height: 2.5px; border-color : transparent;">
                        </div>
                </div>
            </div>
        </div>
    @endforeach

    <a href="#" class="float" data-toggle="modal" data-target="#exampleModal">
        <!-- <button style="height: 60px;width: 60px;border-radius: 50%;background-color: #e14eca;" > -->
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
