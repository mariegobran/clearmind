@extends('layouts.app')

@section('content')
    <h3>My Tasks</h3>
     <!-- User's tasks -->
     @if(count($tasks)>0)
     <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task )
        <tr>
        <td><a href={{url('/tasks/'.$task->id)}}>{{$task->description}}</a></td>
            <td>{{$task->type}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$tasks->links()}}
    @else
        <h5 >No tasks</h5>
    @endif
    
    <div class='text-center'>
        <a class='btn btn-secondary' href={{url('/tasks/create')}}> Add a new task </a>
    </div>

@endsection