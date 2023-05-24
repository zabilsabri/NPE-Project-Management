<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('User.project.projects');
    }

    public function indexNotFound() {
        return view('User.project.empty-projects');
    }

    public function detail() {
        return view('User.project.detail-project');
    }
}
