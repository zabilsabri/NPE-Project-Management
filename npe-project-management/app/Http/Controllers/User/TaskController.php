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

    public function updateDoneTask(Request $request) {
        $task_id = $request->input('task_status');

        if(!empty($task_id)){
            Task::whereIn('id', $task_id)->update(['status' => 1]);
        }
        
        return redirect()->back();
    }

    public function verifyTask(Request $request) {

        $task_id = $request->input('task_status');

        if(!empty($task_id)){
            Task::whereIn('id', $task_id)->update(['is_reviewed' => 1]);
        }
                
        return redirect()->back();
    }

    public function unVerifyTask($id) {
        $task = Task::find($id);

        $task->is_reviewed = 0;
        $task->save();

        return redirect()->back();
    }
}
