@extends('layouts.app')
@section('content')

    <h1>{{$title}}</h1>
    <a class='btn btn-secondary' href={{url('/tasks')}}>My tasks</a>
    <!-- User's information -->
    <div class='alert alert-info'><strong>User's data here...</strong></div>

@endsection