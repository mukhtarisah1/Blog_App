@extends('layouts.app')
@section('content')
    {!!Form::open(['action'=>['PostsController@update', $posts->id], 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
    <div class="form-group">
        {{form::label('title','Title')}}
        {{form::text('title', $posts->title,['class'=>'form-control','placeholder'=>'Title Here'])}}
    </div>
    <div class="form-group">
            {{form::label('body','Body')}}
            {{form::textarea('body', $posts->body,['class'=>'form-control','placeholder'=>'Body Text Here'])}}
    </div>
    <div class="form-group">
            {{form::file('cover_image')}}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{form::submit('submit',['class'=>'btn btn-primary'])}}
    
    {!!Form::close()!!}
@endsection