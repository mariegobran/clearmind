@extends('layouts.app')

@section('content')
    @if(isset($task))
    <div class='jumbotron w-50'>
        <h4> Task Details</h4>
        <hr>
        <div class="list-group">
        
        <p class='list-group-item'><strong>Description:</strong> {{$task->description}}</p>
        
        <p class='list-group-item'><strong>Type:</strong> {{$task->type}}</p>
        
        <p class='list-group-item'><strong>Created at:</strong> {{$task->created_at}}</p>
        
        <p class='list-group-item'><strong>Updated at:</strong> {{$task->updated_at}}</p>
        </div>
        <a class="btn btn-primary" href={{url('/tasks/'. $task->id.'/edit')}} >Edit</a>

        
        {!!Form::open(['action'=>['TasksController@destroy', $task->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
        {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
        {!!Form::hidden('_method','DELETE')!!}
        {!!Form::close()!!}
    </div>
    @endif
   
    <a class="btn btn-secondary" href={{url('/tasks')}} >Go back to my tasks</a>
@endsection