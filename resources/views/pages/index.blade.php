@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome to Laravel Blogs</h1>
    <p>Laravel is a web application framework with expressive, elegant syntax.
        <br>We believe development must be an enjoyable and creative experience to be truly fulfilling.
        <br>Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects</p>
    @if(!Auth::user())
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    @endif
</div>

@endsection
