<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\Task;
use Auth;

class HomeController extends Controller
{
    public function index() {
        $projects = Project::whereHas('employees', function ($query) {
            return $query->where('employee_id', '=', Auth::user()->id);
        })->limit(3)->get();
        $tasks = Task::where('assign_to_id', Auth::user()->id)->limit(5)->get();
        return view('User.home')
            ->with(compact('projects'))
            ->with(compact('tasks'));
    }
}
