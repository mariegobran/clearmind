<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vars = PagesController::getMenu(); 

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $vars['tasks'] = $user->tasks;

        return view('dashboard')->with($vars);
    }
}
