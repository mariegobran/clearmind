@extends('layouts.app')
@section('content')
<div class='jumbotron text-center'>
    <h1>{{$title}}</h1>
    <p>This is where you can put all your tasks</p>
    @guest
    <p><a class='btn btn-primary' href="{{ route('login') }}" role='button'>login</a>
        <a class='btn btn-success' href="{{ route('register') }}" role='button'>register</a></p>
    @else 
    <p><a class='btn btn-success' href={{url('/tasks')}}>Go to My Tasks</a></p>
    @endguest
</div>
@endsection