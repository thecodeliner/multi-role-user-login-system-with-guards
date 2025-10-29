<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function teacherDashboard()
    {
        return view('teacher.dashboard');
    }

    public function teacherProfile()
    {
        return view('teacher.profile');
    }

    public function logout()
    {
        Auth::guard('teacher')->logout();
        return redirect('/login');
    }

}
