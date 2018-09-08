@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>

                    <h3>My Tasks</h3>
                    <!-- User's tasks -->
                    <table class='table table-stripped'>
                        <tr>
                            <th>Description</th>
                            <th>Type</th>
                        </tr>

                        @foreach($tasks as $task)
                            <tr>
                                <td><a href={{url('/tasks/'.$task->id)}}>{{$task->description}}</a></td>
                                <td>{{$task->type}}</td>
                            </tr>
                        @endforeach
                    </table>
                   
                   <div class='text-center'>
                       <a class='btn btn-secondary' href={{url('/tasks/create')}}> Add a new task </a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
