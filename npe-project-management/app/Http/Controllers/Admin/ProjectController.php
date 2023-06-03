<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // dd($project->get(0)->users()->get());
        return view('Admin.project.projects', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::find($id);

        return view('Admin.project.detail-project', compact('project'));
    }

    public function create()
    {
        $employees = User::orderBy('credit', 'desc')->where('isAdmin', '0')->get();
        return view('Admin.project.new-project', compact('employees'));
    }

    public function store(Request $request)
    {
        /* dd($request); */
        $validated = $request->validate([
            'nama' => ['required'],
            'employees' => ['required', 'array', 'min:1'],
            'klien' => ['required'],
            'tipe' => ['required'],
            'detail' => ['required'],
            'deadline' => ['required', 'date', 'after:today'],
            'pm_id' => ['required', 'integer'],
        ]);

        $employees = $request->validate([
            'employees' => ['required', 'array', 'min:1'],
        ]);

        $project = Project::create($validated);
        $project->employees()->attach($employees['employees']);

        return redirect(route('project.admin'))->with("success", "Projek " . $validated['nama'] . " telah ditambahkan");
    }

    public function edit($id)
    {
        $project = Project::find($id);
        $employees = User::orderBy('credit', 'desc')->where('isAdmin', '0')->get();

        return view('Admin.project.new-project', compact('project', 'employees'));
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'nama' => ['required'],
            'employees' => ['required', 'array', 'min:1'],
            'klien' => ['required'],
            'tipe' => ['required'],
            'detail' => ['required'],
            'deadline' => ['required', 'date', 'after:today'],
            'pm_id' => ['required', 'integer'],
        ]);

        $employees = $request->validate([
            'employees' => ['required', 'array', 'min:1'],
        ]);

        $project = Project::find($request['id']);

        $project->update($validated);
        $project->employees()->sync($employees['employees']);

        return redirect(route('project.admin'))->with("success", "Projek " . $validated['nama'] . " telah diupdate");
    }

    public function destroy($id) {
        Project::find($id)->delete();
    }
}
