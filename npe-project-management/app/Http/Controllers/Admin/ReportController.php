<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        return view('Admin.report.report');
    }

    public function detail() {
        return view('Admin.report.detail-report');
    }
}
