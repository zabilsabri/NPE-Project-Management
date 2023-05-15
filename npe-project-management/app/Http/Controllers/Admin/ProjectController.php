<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // $project = Project::all();
        // dd($project->get(0)->users()->get());
        return view('Admin.project.project');
    }

    public function create()
    {
        // $project = Project::all();
        // dd($project->get(0)->users()->get());
        return view('Admin.project.new-project');
    }
}
