@extends('layouts.app')
@section('content')
    <div class="singlepost">
        <h1>{{$post->title}}</h1>
        <img src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"/>
        <div>
            <p>{{$post->body}}</p> 
        </div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        <div>
            <h3>Share this blog</h3>
        </div>
        @if(!Auth::guest())
         @if(Auth::user()->id == $post->user_id)
        <a href="/lsapp/public/blog/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
        @endif
    </div>
@endsection