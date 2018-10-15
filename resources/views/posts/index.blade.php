@extends('layouts.app')

@section('content')

<h1><center>Posts</center></h1>
@if(count($posts)>0)
    @foreach($posts as $post)
    <div class="card bg-faded card-block" style="margin-bottom:30px">
        <div class="row">
                <div class="col-md-4 col-sm-4">
                <img style="width:70%; margin:20px;" class="img-thumbnail" src="../public/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 style="padding-left:20px;"><a href="/laravel_p/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <p class="ml-3">Written on {{$post->created_at}} by <strong>{{$post->user->name}}</strong></p>
                </div>
        
        </div>
    </div>

    @endforeach
    {{$posts->links()}}
@else
<p>No posts found</p>
@endif
@endsection