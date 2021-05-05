@extends('layouts.app', ['pageSlug' => 'chat'])

@section('content')


<div class="header py-7 py-lg-8" >
        <div class="row justify-content-center">
            <div class="col-lg-6" >
                <div class="media">
                    <form action="{{route('Search.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="text" name="name" class="form-control" id="inlineFormInputGroup" placeholder="{{ __('SEARCH') }}" style="color: #fff;">
                    </form>
                </div>
            </div>
        </div><br><br>


        <div class="row justify-content-center">
            <div class="col-lg-6">
                    @if($users->count()<=0)
                            <h4>User name not found...!</h4>
                    @else
                    @foreach($users as $user)
                    <div class="list-group list-group-chat list-group-flush">
                        <a href="{{route('profile.edit',$user->id)}}">
                            <div class="media">
                                <img alt="Image" src="{{url('storage/'.$user->img)}}" class="rounded-circle" width="50px" height="50px">
                                <div class="media-body ml-2">
                                    <div class="justify-content-between align-items-center">
                                        <h4 class="mb-0 text-white" style="margin-top: 13px;margin-left: 4px;">{{$user->name}}</h4>
                                    </div>
                                </div>
                            </div>
                        </a><br>
                    </div>
                    @endforeach
                    @endif
            </div>
        </div>

    </div>

@endsection
