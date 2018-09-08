@extends('layouts.app')

@section('content')
    <h3>Edit Task</h3>
    {!! Form::open(['action'=>['TasksController@update', $task->id], 'method'=>'POST']) !!}
    <div class='form-group'>
        {{Form::label('title','Title')}}
        {{Form::textarea('description',$task->description,['class'=>'form-control', 'placeholder'=>'Task description...', 'rows'=>3])}}
    </div>
    <div class='form-group'>
            {{Form::label('type','Type')}}
            {{Form::select('type', 
            ['basic' => 'Basic', 
            'project' => 'Project',
            'location' => 'Location',
            'people' => 'People',
            'meeting' => 'Meeting' ],$task->type, ['class'=>'form-control'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection