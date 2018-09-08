@extends('layouts.app')

@section('content')
    <h3>New Task</h3>
    {!! Form::open(['action'=>'TasksController@store']) !!}
    <div class='form-group'>
        {{Form::label('title','Title')}}
        {{Form::textarea('description','',['class'=>'form-control', 'placeholder'=>'Task description...', 'rows'=>3])}}
    </div>
    <div class='form-group'>
            {{Form::label('type','Type')}}
            {{Form::select('type', 
            ['basic' => 'Basic', 
            'project' => 'Project',
            'location' => 'Location',
            'people' => 'People',
            'meeting' => 'Meeting' ], 'basic', ['class'=>'form-control','placeholder' => 'Pick a type...'])}}
    </div>
    
   
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection