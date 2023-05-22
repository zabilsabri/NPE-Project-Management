<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = User::orderByDesc('credit')->get();

        return view('Admin.employee.employee', compact('employees'));
    }
}
