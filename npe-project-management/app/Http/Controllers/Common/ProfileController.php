<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function index() {
        $profile = User::where('id', Auth::user()->id)->first();
        return view('Common.profile')
            ->with(compact('profile'));
    }
}
