<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Milestone;
use App\Models\Task;
use Auth;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::whereHas('employees', function ($query) {
                        return $query->where('employee_id', '=', Auth::user()->id)->where('status', 0)->orWhere('status', 2);
                    })->get();
        $projects_count = Project::whereHas('employees', function ($query) {
                        return $query->where('employee_id', '=', Auth::user()->id)->where('status', 0)->orWhere('status', 2);
                    })->count();
        if($projects_count == 0){
            return view('User.project.empty-projects');
        } else {
            return view('User.project.projects')
                ->with(compact('projects'));
        }
    }

    public function finish() {
        $finished_projects = $projects = Project::whereHas('employees', function ($query) {
                                return $query->where('employee_id', '=', Auth::user()->id)->where('status', 3)->orWhere('status', 1);
                            })->get();
        return view('User.project.finished-project')
            ->with(compact('finished_projects'));
    }

    public function indexNotFound() {
        return view('User.project.empty-projects');
    }

    public function detail($id) {
        $project = Project::find($id);
        $milestones = Milestone::where('project_id', $id)->get();
        $tasks = Task::with('milestone')->where('assign_to_id', Auth::user()->id)->get();
        return view('User.project.detail-project')
            ->with(compact('project'))
            ->with(compact('milestones'))
            ->with(compact('tasks'));
    }

    public function detailMilestone($id){
        $milestone = Milestone::find($id);
        return view('User.milestone.detail-milestone')
            ->with(compact('milestone'));
    }
}
