<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showAdminDashboard()
   {
        $students = Student::all();
        $teachers = Teacher::all();



        $users = $teachers->toBase()->merge($students->toBase());
        $latestUsers = $users->sortByDesc('created_at')->take(5);

        return view('admin.dashboard', [
            'users' => $users,
            'students' => $students,
            'teachers' => $students,
            'latestUsers' => $latestUsers,
        ]);

        dd($users->all());

   }

   public function adminProfile()
   {
    $admin = Auth::guard('web')->user();
       return view('admin.profile', [
           'admin' => $admin,
       ]);
   }

   public function createAdmin(){

       $adminExists = User::where('role', 'admin')->exists();


      if($adminExists){

          return redirect()->route('login')->withError('error', 'You are not allowed to create admin');
      }
      return view('admin.create_admin');
   }

    public function storeAdmin(Request $request){

       $validated = $request->validate([

           'name'       => 'required',
           'email'      => 'required|email',
           'password'   => 'required',


           ]);

           $validated['role'] = 'admin';
           $validated['password'] = Hash::make($validated['password']);

           User::create($validated);

           return redirect()->back()->withError('error', 'Admin created successfully');


   }

   public function logout()
   {
       Auth::guard('web')->logout();
       return redirect('/login');
   }
}
