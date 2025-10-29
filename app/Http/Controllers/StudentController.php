<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function studentDashboard()
    {
        return view('student.dashboard');
    }
    public function studentProfile()
    {
        $student = Auth::guard('student')->user();
        return view('student.profile', [

            'student' => $student,

            ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('student')->logout();
        return redirect('/login');
    }


}
