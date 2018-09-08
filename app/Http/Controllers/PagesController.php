<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class PagesController extends Controller
{
    public function index(){
        $vars = $this->getMenu();
        $vars['title'] = 'Welcome';
        return view('pages.welcome')->with($vars);
    }

    public function profile(){
        $vars = $this->getMenu();
        $vars['title'] = 'My Profile';
        return view('pages.profile')->with($vars);
    }

    public function projects(){
        $vars = $this->getMenu();
        $vars['title'] = 'Projects';
        $vars['tasks'] = Task::where('type','=', 'project')->paginate(5);
        return view('pages.projects')->with($vars);
    }

    public function meetings(){
        $vars = $this->getMenu();
        $vars['title'] = 'Meetings';
        $vars['tasks'] = Task::where('type','=', 'meeting')->paginate(5);
        return view('pages.meetings')->with($vars);
    }

    public function locationTasks(){
        $vars = $this->getMenu();
        $vars['title'] = 'Location based tasks';
        $vars['tasks'] = Task::where('type','=', 'location')->paginate(5);
        return view('pages.locationTasks')->with($vars);
    }

    public function peopleTasks(){
        $vars = $this->getMenu();
        $vars['title'] = 'People based tasks';
        $vars['tasks'] = Task::where('type','=', 'people')->paginate(5);
        return view('pages.peopleTasks')->with($vars);
    }


    public function info(){
        $vars = $this->getMenu();
        $vars['title'] = 'Information';
        return view('pages.info')->with($vars);
    }

    public static function getMenu(){
        return array(
            'menu'=> array( // key is for the url path and value for menu item's name
                'projects' => 'Projects',
                'location-based'=>'Location Tasks',
                'people-based' => 'People Tasks',
                'meetings' => 'Meetings',
                'info' => 'help'
            )
        );
    }
}
