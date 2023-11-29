<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Milestone;
use App\Models\Task;
use Auth;
use DB;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::whereHas('employees', function ($query) {
                        return $query->where('employee_id', '=', Auth::user()->id)->where('status', 0)->orWhere('status', 2);
                    })->orWhere('pm_id', Auth::user()->id)->get();
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
        $tasks = DB::table('tasks')
        ->join('users', 'users.id', '=', 'tasks.assign_to_id')
        ->join('milestones', 'milestones.id', '=', 'tasks.milestone_id')
        ->join('projects', 'projects.id', '=', 'milestones.project_id')  
        ->where('tasks.assign_to_id', Auth::user()->id)
        ->where('tasks.status', 0)  
        ->where('projects.id', $id)
        ->select('tasks.*', 'milestones.nama as milestone_nama', 'projects.nama as project_nama', 'users.nama as user_nama')
        ->get();

        return view('User.project.detail-project')
            ->with(compact('project'))
            ->with(compact('milestones'))
            ->with(compact('tasks'));
    }

    public function detailMilestone($id){
        $milestone = Milestone::find($id);
        $completedTask = Task::where('milestone_id', $id)->where('status', 1)->where('is_reviewed', 1)->get();

        $totalTask = Task::where('milestone_id', $id)->count();
        $rowsWithTrueStatus = Task::where('milestone_id', $id)->where('is_reviewed', true)->count();

        if ($totalTask > 0 && $totalTask === $rowsWithTrueStatus) {
            $milestoneStatus = true;
        } else {
            $milestoneStatus = false;
        }

        return view('User.milestone.detail-milestone')
            ->with(compact('milestone', 'completedTask', 'milestoneStatus'));
    }

    public function newMilestone($id) {
        $project = Project::find($id);
        return view('User.milestone.new-milestone', compact('project'));
    }

    public function storeMilestone(Request $request) {
        $validated = $request->validate([
            'nama' => 'required',
            'deadline' => 'required',
            'detail' => 'required',
        ]);

        $milestone = new Milestone;
        $milestone->nama = $request->nama;
        $milestone->deadline = $request->deadline;
        $milestone->detail = $request->detail;
        $milestone->status = 0;
        $milestone->project_id = $request->project_id;
        $milestone->save();

        return redirect()->route('user.projects.detail', [$request->project_id]);
    }

    public function editMilestone(Request $request, $id) {
        $project = Milestone::find($id);
        return view('User.milestone.new-milestone', compact('project'));
    }

    public function updateMilestone(Request $request, $id) {
        $validated = $request->validate([
            'nama' => 'required',
            'deadline' => 'required',
            'detail' => 'required',
        ]);

        $milestone = Milestone::find($id);
        $milestone->nama = $request->nama;
        $milestone->deadline = $request->deadline;
        $milestone->detail = $request->detail;
        $milestone->status = 0;
        $milestone->project_id = $request->project_id;
        $milestone->save();

        return redirect()->route('user.projects.detail', [$request->project_id]);
    }

    public function deleteMilestone($id) {
        $milestone = Milestone::find($id)->delete();

        return redirect()->back();
    }

    public function storeTask(Request $request) {
        $task = new Task;
        $task->nama = $request->nama;
        $task->deadline = $request->deadline;
        $task->detail = $request->detail;
        $task->status = 0;
        $task->milestone_id = $request->milestone_id;
        $task->assign_to_id = $request->assign_to_id;
        $task->save();

        return redirect()->back();
    }

    public function updateTask(Request $request, $id) {
        $task = Task::find($id);
        $task->nama = $request->nama;
        $task->deadline = $request->deadline;
        $task->detail = $request->detail;
        $task->status = 0;
        $task->milestone_id = $request->milestone_id;
        $task->assign_to_id = $request->assign_to_id;
        $task->save();

        return redirect()->back();
    }

    public function deleteTask($id) {
        $task = Task::find($id)->delete();

        return redirect()->back();
    }

    public function updateMilestoneStatus($id, $status) {
        $milestone = Milestone::find($id);
        $milestone->status = $status;
        $milestone->save();

        return redirect()->back();
    }
}
