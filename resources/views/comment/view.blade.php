@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="col-lg-8">
        <div class="card card-plain">

            <div class="card-body">
                @foreach($comments as $comment)
                    @if($comment->sender_name != Auth::user()->name)
                        <div class="row justify-content-start">
                            <div class="col-auto">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <p class="mb-1">
                                            {{$comment->message}}
                                        </p>
                                        <div>
                                            <small class="opacity-60"><i class="far fa-clock"></i> {{$comment->created_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row justify-content-end text-right">
                            <div class="col-auto">
                                <div class="card bg-primary text-white">
                                    <div class="card-body p-2">
                                        <p class="mb-1">
                                            {{$comment->message}}                                </p>
                                        <div>
                                            <small class="opacity-60">{{$comment->created_at}}</small>
                                            <i class="ni ni-check-bold"></i>
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
                    <form action="{{route('Comment.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="post_id" value="{{$id}}" hidden>
                        <input type="text" name="sender_name" value="{{Auth::user()->name}}" hidden>
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

