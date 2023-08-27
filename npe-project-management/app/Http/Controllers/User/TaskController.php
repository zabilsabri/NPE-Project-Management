<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Auth;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::where('assign_to_id', Auth::user()->id)->get();
        return view('User.task.my-task')
            ->with(compact('tasks'));
    }
}
