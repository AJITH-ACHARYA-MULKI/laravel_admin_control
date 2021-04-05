@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

    <div class="row flex-row chat">
        <div class="col-lg-4">
            <div class="card bg-secondary">
                <form class="card-header mb-3">
                    <div class="input-group input-group-alternative">
                        <input type="text" class="form-control" placeholder="Search contact">

                        <div class="input-group-append">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
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
                                    <h6 class="mb-0 text-white">{{$user->username}}
                                        <span class="badge badge-success"></span>
                                    </h6>
                                    <div>
                                        <small>Typing...</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
