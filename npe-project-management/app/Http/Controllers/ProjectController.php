<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return view('Admin.project');
    }

    public function addForm()
    {
        return view('Admin.new-project');
    }
}
