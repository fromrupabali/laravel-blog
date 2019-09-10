@extends('layouts.app')

@section('content')
<div class="blogdash">
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

                    <a href="/lsapp/public/blog/create" class="btn btn-primary">Create blog</a>
                    @if(count($posts) > 0)
                    <h3>Your blog posts</h3>
                        @foreach($posts as $post)
                            <div class="personalblog">
                                <div class="blogimage">
                                    <img src="/lsapp/public/storage/cover_images/{{$post->cover_image}}"/>
                                </div>
                                <div class="blogcontrol">
                                    <h5>{{$post->title}}</h5>
                                    <a href="/lsapp/public/blog/{{$post->id}}/edit"> Edit</a>
                                   {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                   {{Form::hidden('_method', 'DELETE')}}
                                  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                  {!!Form::close()!!} 
                                </div>
                            </div> 
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
