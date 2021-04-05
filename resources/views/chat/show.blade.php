@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="col-lg-8">
        <div class="card card-plain">
            <div class="card-header d-inline-block">
                <div class="row">
                    <div class="col-md-10">
                        <div class="media align-items-center">
                            <img alt="Image" src="{{url('storage/'.$rec->img)}}" class="avatar shadow" >
                            <div class="media-body">
                                <h6 class="mb-0 d-block">{{$rec->name}}</h6>
                                <span class="text-muted text-small">last seen today at 1:53am</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-3">
                        <button class="btn btn-link btn-text" type="button" data-toggle="tooltip" data-placement="top" title="Video call">
                            <i class="ni ni-book-bookmark"></i>
                        </button>
                    </div>
                    <div class="col-md-1 col-3">
                        <div class="dropdown">
                            <button class="btn btn-link text-primary" type="button" data-toggle="dropdown">
                                <i class="ni ni-settings-gear-65"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
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
                                <div class="card">
                                    <div class="card-body p-2">
                                        <p class="mb-1">
                                            {{$chat->message}}
                                        </p>
                                        <div>
                                            <small class="opacity-60"><i class="far fa-clock"></i> 3:14am</small>
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
                    <div class="input-group mb-4">
                        <input class="form-control" placeholder="Your message" type="text" name="message">

                        <div class="input-group-append">
                            <button class="btn bg-primary" type="submit">send</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



