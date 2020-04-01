@extends('layouts.app')
@section('content')
    <div class="card ">
        <div class="card-image">
                <img style="width:100%" src="/storage/cover_image/{{$posts->cover_image}}">
        </div>
        <h2 class="card-header text-center">{{$posts->title}}</h2>
        <div class="card-body">{{$posts->body}}
            <hr>
            <p><small>Created at >{{$posts->created_at}} by {{$posts->user->name}}</small></p>

            <div>
                @if(!Auth::guest())
                    @if(Auth::user()->id==$posts->user_id)
                        <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>
                            {!!Form::open(['action'=>['PostsController@destroy',$posts->id], 'method'=>'Post','class'=>'float-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::Submit('Delete',['class'=>'btn btn-danger '])}}
                        {!!Form::close()!!}
                   @endif
                        
                </div>
                @endif
        </div>  
        
    </div>
    
@endsection