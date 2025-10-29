<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function showLogin()
   {
       return view('auth.login');
   }


   //login

   public function login(Request $request){

       $credentials = $request->validate([

           'email' => 'required|email',
           'password' => 'required',
           //'role'     => 'required|in:student,teacher',

           ]);

       $guardRole = $request->role;

       $login = Auth::guard($guardRole)->attempt($credentials);




       if($login && $guardRole === 'teacher'){

            return redirect()->route('teacher.profile');
       }elseif($login && $guardRole === 'student'){

          return redirect()->route('student.profile');
       }elseif($login && $guardRole === 'web'){

          $user = Auth::guard('web')->user();

          if($user->role === 'admin'){
              return redirect()->route('admin.dashboard');
          }
       }else{

           return back()->withErrors(['error' => 'Credentials does not match.']);
       }



    //    if($guardRole === 'teacher'){
    //     if($login){

    //       return redirect()->route('teacher.profile');
    //     }else{

    //         return back()->withErrors(['error' => 'Credentials does not match.']);
    //     }
    //    }

    //     if($guardRole === 'student'){
    //    if($login){

    //       return redirect()->route('student.profile');
    //     }else{

    //         return back()->withErrors(['error' => 'Credentials does not match.']);
    //     }
    //     }


    //   if ($guardRole === 'web') {

    // if ($login) {

    //     $user = Auth::guard('web')->user();

    //    //dd($user);

    //     if ($user->role === 'admin') // role check because Admin has no separete guard and model
    //     {
    //         return redirect()->route('admin.dashboard');
    //     }

    // }

    //      return back()->withErrors(['error' => 'Credentials do not match']);
    //   }

        //      if(Auth::guard('web')->attempt($credentials)){

        //         if(Auth::user()->role === 'admin'){
        //              return redirect()->route('admin.dashboard');
        //         }

        //     }else{

        //     return back()->withErrors(['error' => 'Credentials does not match.']);
        // }





       //dd($studentLogin);

    //   if($studentLogin){

    //       return redirect()->route('student.profile');
    //     }else{

    //         return back()->withErrors('Credentials does not match.');
    //     }
    //     if($teacherLogin){

    //       return redirect()->route('teacher.profile');
    //     }else{

    //         return back()->withErrors('Credentials does not match.');
    //     }


   }


}
