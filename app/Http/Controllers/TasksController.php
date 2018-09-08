<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = PagesController::getMenu();
        $vars['tasks'] = Task::paginate(7);
        return view('tasks.index')->with($vars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vars = PagesController::getMenu();
        return view('tasks.create')->with($vars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ //TODO: add more rules later
            'description' =>'required',
            'type' => 'required'
        ]);

        //create new task
        $task = new Task;
        $task->description = $request->input('description');
        $task->type = $request->input('type');
        $task->user_id = auth()->user()->id;
        $task->save();

        $vars = PagesController::getMenu();
        $vars['success'] = 'Task created!';
        return redirect('/tasks')->with($vars);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vars = PagesController::getMenu();
        $vars['task'] = Task::find($id);
        return view('tasks.show')->with($vars);
    }

    //TODO: add more show options (ex: parameters-> id & filterBy)

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vars = PagesController::getMenu();
        $vars['task'] = Task::find($id);
        return view('tasks.edit')->with($vars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request,[ //TODO: add more rules later
            'description' =>'required',
            'type' => 'required'
        ]);

        //edit task
        $task = Task::find($id);
        $task->description = $request->input('description');
        $task->type = $request->input('type');
        $task->save();

        $vars = PagesController::getMenu();
        $vars['success'] = 'Task updated!';
        return redirect('/tasks')->with($vars);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        $vars = PagesController::getMenu();
        $vars['success'] = 'Task deleted!';
        return redirect('/tasks')->with($vars);
    }
}
