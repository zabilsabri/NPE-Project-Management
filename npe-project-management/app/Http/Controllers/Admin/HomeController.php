<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('deadline')->take(5)->get();
        $employees = User::orderBy('credit', 'desc')->whereNot('jabatan', 'admin')->take(5)->get();
        return view('Admin.home.index', compact('projects', 'employees'));
    }
}
