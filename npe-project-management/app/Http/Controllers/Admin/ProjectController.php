<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // dd($project->get(0)->users()->get());
        return view('Admin.project.project', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::find($id);

        return view('Admin.project.detail-project', compact('project'));
    }

    public function create()
    {
        return view('Admin.project.new-project');
    }

    public function edit($id)
    {
        $project = Project::find($id);

        return view('Admin.project.new-project', compact('project'));
    }
}
