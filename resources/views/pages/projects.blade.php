@extends('layouts.app')

@section('content')
    <h3>Projects</h3>
     <!-- User's projects -->
     @if(isset($projects))
     <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projects as $project )
        <tr>
        <td><a href={{url('/projects/'.$project->id)}}>{{$project->description}}</a></td>
            <td>{{$project->type}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <h5 >No projects</h5>
    @endif
    
    <div class='text-center'>
            <a class='btn btn-secondary' href={{url('/projects/create')}}> Add a new project </a>
            </div>

@endsection