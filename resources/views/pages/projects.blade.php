@extends('layouts.app')

@section('content')
    <h3>Projects</h3>
     <!-- User's projects -->
     <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
        <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
    
    <div class='text-center'>
            <a class='btn btn-secondary' href={{url('/projects/create')}}> Add a new project </a>
            </div>

@endsection