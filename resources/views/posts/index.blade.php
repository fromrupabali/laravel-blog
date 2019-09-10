@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/posts.css')}}" />

@section('content')
    <h1 class="blogheader">Featured blogs</h1>
    @if(count($posts) > 0)
      <div class="blogContainer">
          @foreach ($posts as $post)
          <div class="blog">
              <img src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"/>
              <div class="blogintro">
                      <h4 class="blogintroelem"> <a href="/lsapp/public/blog/{{$post->id}}">{{$post->title}}  </a> </h4>
                      <small  class="blogintroelem">{{$post->user->name}}</small>
              </div>
          </div>
         
        @endforeach
      </div>
      {{$posts->links()}}
    @else
      <p>No post found </p>
    @endif
@endsection