@extends('layouts.app')

@section('content')
 <div class="jumbotron text-center">
    <h1>{{$t}}</h1>
    <p><q>We write to taste life twice, in the moment and in retrospect.</q>  </p>
    <p><a class="btn btn-primary" href="/laravel_p/public/login" role="button">Login</a> <a class="btn btn-success" href="/laravel_p/public/register" role="button">Register</a></p>
</div>
@endsection