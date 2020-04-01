@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome To Newslive!</h1>
    <p class="lead">Get daily news and breaking news and latest news reports from around the world on politics, business, sports, health and technology.</p>
    <hr class="my-4">
    <p>visit our newsapp blog daily for insightful news and articles to help you start your day .</p>
    <a class="btn btn-primary " href="/login" role="button">Login</a>
    <a class="btn btn-success " href="/register" role="button">Register</a>
  </div>
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
        <h2><a href="/posts">view more... </a></h2>
    @else
            <h2>No posts found</h2>
    @endif
  @endsection