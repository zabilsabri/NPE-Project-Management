<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index() {
        $employees = User::orderByDesc('credit')->where('isAdmin', '0')->get();

        return view('Admin.employee.employee', compact('employees'));
    }

    public function create() {
        return view('Admin.employee.new-employee');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:6', 'max:225'],
            'divisi' => ['required'],
            'jabatan' => ['required'],
            'nomorTelpon' => ['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        /* dd($validated); */
        User::create($validated);

        return redirect(route('employee.admin'))->with('success', 'Data employee berhasil ditambahkan');
    }

    public function edit($id) {
        $employee = User::find($id);

        return view('Admin.employee.new-employee', compact('employee'));
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'id' => ['required'],
            'nama' => ['required', 'max:255'],
            'email' => ['required', 'email:dns'],
            'divisi' => ['required'],
            'jabatan' => ['required'],
            'nomorTelpon' => ['required'],
        ]);

        $user = User::find($validated['id']);
        $user->nama = $validated['nama'];
        $user->email = $validated['email'];
        $user->divisi = $validated['divisi'];
        $user->jabatan = $validated['jabatan'];
        $user->nomorTelpon = $validated['nomorTelpon'];

        if (!is_null($request['password'])) {
            $user->password = Hash::make($request['password']);
        }

        $user->save();

        return redirect(route('employee.admin'))->with('success', 'Data employee berhasil diupdate');
    }

    public function destroy($id) {
        User::find($id)->delete();

    }
}
