@extends('layouts.app', ['pageSlug' => 'chat'])

@section('content')

   <!--  <div class="row flex-row chat">
        <div class="col-lg-5">
            <div class="card bg-gradient-primary">
                <form class="card-header mb-3">
                    <div class="input-group mb-4">
                                <input class="form-control" placeholder="Your message" type="text" name="text" required="">
                                <button class="btn btn-sm btn-primary btn-icon"><i class="tim-icons icon-zoom-split"></i></button>
                    </div>
                    <div class="input-group input-group-alternative">
                        <input type="text" class="form-control" placeholder="Search contact">

                        <div class="input-group-append">
                            <span class="input-group-text">
                                <button class="btn"><i class="tim-icons icon-zoom-split"></i></button>

                        </div>
                    </div>
                </form>
                @foreach($users as $user)
                <div class="list-group list-group-chat list-group-flush">
                    <a href="{{route('Chat.show',$user->id)}}" class="list-group-item active bg-gradient-primary">
                        <div class="media">
                            <img alt="Image" src="{{url('storage/'.$user->img)}}" class="rounded-circle avatar avatar-sm" >
                            <div class="media-body ml-2">
                                <div class="justify-content-between align-items-center">
                                    <h6 class="mb-0 text-white">{{$user->name}}
                                        <span class="badge badge-success"></span>
                                    </h6>
                                    <div>
                                        <small></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </div> -->


<div class="row flex-row chat">
        <div class="col-lg-4">
            <div class="card bg-gradient-primary">
                <form class="card-header mb-3">
                    <div class="input-group mb-4">
                        <input class="form-control" placeholder="Your message" type="text" name="Search" required="">
                        <button class="btn btn-sm btn-primary btn-icon"><i class="tim-icons icon-zoom-split"></i></button>
                    </div>
                </form>
                @foreach($users as $user)
                <div class="list-group list-group-chat list-group-flush bg-gradient-primary">
                    <a href="{{route('Chat.show',$user->id)}}" class="list-group-item active" style="background-color: #333558">
                        <div class="media">
                            <img alt="Image" src="{{url('storage/'.$user->img)}}" class="rounded-circle" width="50px" height="50px">
                            <div class="media-body ml-2">
                                <div class="justify-content-between align-items-center">
                                    <h6 class="mb-0 text-white">{{$user->name}}</h6>
                                    <div>
                                        <p class="text-white" style="font-size: 0.7rem;">2 days ago</p>
                                    </div>
                                </div>
                                @foreach($last_msg as $msg)
                                @if($user->id==$msg->rec_id or $user->id==$msg->send_id)
                                <span class="text-white" style="font-size: 0.7rem;">{{$msg->message}}</span>
                                @break
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card bg-gradient-primary">
                <div class="card-header d-inline-block">
                    <div class="row">
                        <div class="col-md-10">
                            @foreach($users as $user)
                            @if($rec->id==$user->id)
                            <div class="media align-items-center">
                                <img alt="Image" src="{{url('storage/'.$rec->img)}}" class="rounded-circle" width="35px" height="35px" style="margin-right: 5px; margin-top: -3px">
                                <div class="media-body">
                                    <h6 class="mb-0 d-block">{{$rec->name}}</h6>
                                    <span class="text-muted text-small">last seen today at 3:23 pm</span>
                                </div>
                            </div>
                            @break
                            @endif
                            @endforeach
                        </div>
        
                        <div class="col-md-1 col-3">
                            <button class="btn btn-link btn-text" type="button" data-toggle="tooltip" data-placement="top" title="Video call"><i class="ni ni-book-bookmark"></i></button>
                        </div>

                        <div class="col-md-1 col-3">
                            <div class="dropdown">
                                <button class="btn btn-link text-primary" type="button" data-toggle="dropdown" aria-expanded="false"><i class="ni ni-settings-gear-65"></i></button>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(42px, 24px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="javascript:;">
                                        <i class="ni ni-single-02"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i class="ni ni-notification-70"></i> Mute conversation
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i class="ni ni-key-25"></i> Block
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i class="ni ni-button-power"></i> Clear chat
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i class="ni ni-fat-remove"></i> Delete chat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                @foreach($chats as $chat)
                    @if($chat->rec_id !=Auth::user()->id)
                        <div class="row justify-content-end text-right">
                            <div class="col-auto">
                                <div class="card bg-primary text-white">
                                    <div class="card-body p-2">
                                        <p class="mb-1">
                                            {{$chat->message}}                                </p>
                                        <div>
                                            <small class="opacity-60">3:30am</small>
                                            <i class="ni ni-check-bold"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row justify-content-start">
                            <div class="col-auto">
                                <div class="card" style="background-color: #5ca08e">
                                    <div class="card-body p-2">
                                        <p class="mb-1">
                                            {{$chat->message}}
                                        </p>
                                        <div>
                                            <small class="text-white"><i class="far fa-clock"></i> 3:14am</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


                <div class="card-footer d-block">
                <div class="form-group">
                    <form action="{{route('Chat.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="send_id" value="{{Auth::user()->id }}" hidden>
                        <input type="text" name="rec_id" value="{{$rec->id}}" hidden>
                    <!-- <div class="input-group mb-4">
                        <input class="form-control" placeholder="Your message" type="text" name="message">

                        <div class="input-group-append">
                            <button class="btn bg-primary" type="submit"><i class="tim-icons icon-send"></i></button>
                        </div>
                    </div> -->
                    <div class="input-group mb-4">
                        <input class="form-control" placeholder="Your message" type="text" name="message" required="">
                        <button class="btn btn-sm btn-primary btn-icon"><i class="tim-icons icon-send"></i></button>
                    </div>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>

@endsection
