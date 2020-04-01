@extends('layouts.app')
@section('content')
    <h1 class="text-center">ALL RECENT POSTS</h1>
    <hr/>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-4 col-sm-8">
                <img style="width:100%" src="/storage/cover_image/{{$post->cover_image}}">
            </div>
            <div class="col-md-8 col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            
            </div>  
        </div> 
            <br/> 
        @endforeach
        {{$posts->links()}}
        <hr/>
    @else
            <h2>No posts found</h2>
    @endif
    @if(!Auth::guest())
    <div class="">
        <a href="/posts/create" class="btn btn-success">Add Post</a>
    </div>
    @endif
@endsection