@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p><a href="/posts/create" class="btn btn-primary">Create Post</a></p>
                    @if(count($posts)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                    
                        @foreach($posts as $post) 
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary" >Edit</td>
                                    <td>
                                        {!!Form::open(['action'=>['PostsController@destroy',$post->id], 'method'=>'Post','class'=>'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::Submit('Delete',['class'=>'btn btn-danger '])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>    
                            
                        @endforeach
                        
                    @else
                         <td>No Posts Available</td>   
                    @endif
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
