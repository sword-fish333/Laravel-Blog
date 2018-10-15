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
                        <a href="posts/create" class="btn btn-primary">Create Post</a>
                   <h3 class="mt-4">Your Blog posts</h3>
                   @if(count($posts)>0)
                   <table class="table table-striped table-hover">
                        <tr>
                            <th>Title</th>
                            <th colspan="2" style="text-align:center;">Action</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/laravel_p/public/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a></td>
                                <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}</td>
                        </tr>
                        @endforeach
                   </table>
                   @else 
                   <div class="alert alert-warning">
                        <p><strong>You have no posts</strong></p>
                   </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
