@extends('layouts.app')
@section('content')
<div class="p-2 text-center">
    <h1>Create New Post</h1>
</div>
    {!!Form::open(['action'=>'PostsController@store', 'method'=>'POST','enctype'=>'multipart/form-data'])!!}
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title','',['class'=>'form-control','placeholder'=>'Title Here'])}}
    </div>
    <div class="form-group">
            {{form::label('body','Body')}}
            {{form::textarea('body','',['class'=>'form-control','placeholder'=>'Body Text Here'])}}
        </div>
        <div class="form-group">
            {{form::file('cover_image')}}
        </div>
        {{form::submit('submit',['class'=>'btn btn-primary'])}}
       
    {!!Form::close()!!}
@endsection