<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return view('Admin.project');
    }

    public function addForm()
    {
        $users = User::all();
        return view('Admin.new-project', compact('users'));
    }
}
