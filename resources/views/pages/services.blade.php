@extends('layouts.app')
@section('content')
    <h1>Welcome to the services page</h1>
    <h1>{{$title}}</h1>
    <ul>
    @foreach ($services as $service)
        <li class="list-group-item">{{$service}}</li>   
    @endforeach
    </ul>
@endsection