<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectUser;
use App\Models\Project;

class ReportController extends Controller
{
    public function indexUser($id) {
        $project = ProjectUser::with('employee', 'project')->where('project_id', $id)->get();
        $projectOne = Project::find($id);

        return view('User.project.report-project')
            ->with(compact('project', 'projectOne'));
    }

    public function store(Request $request, $id) {
        $summaries = $request->input('summary');

        if (!empty($summaries)) {
            foreach ($summaries as $itemId => $itemName) {
                ProjectUser::where('employee_id', $itemId)->update(['performance_review' => $itemName]);
            }
        }

        Project::where('id', $id)->update(['status' => 1]);
    
        return redirect()->route('user.projects');
    }
}
