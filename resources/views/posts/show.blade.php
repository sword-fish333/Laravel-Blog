@extends('layouts.app')

@section('content')
<a href="/laravel_p/public/posts" class="btn btn-primary" role="button" style="margin-top:30px;">Back</a>
<h1><center>{{$post->title}}</center></h1>
<img style="width:70%; margin:20px;" class="img-thumbnail" src="../../public/storage/cover_images/{{$post->cover_image}}">
<br>
<hr>
<p style="font-size:18px;"><strong>    {!!$post->body!!}
</strong>
</p>
<hr>
<p>Written at {{$post->created_at}}</p>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id==$post->user_id)
<a href="/laravel_p/public/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endif
@endif
            @endsection