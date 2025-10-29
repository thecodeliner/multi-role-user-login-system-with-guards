<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCredentialsMail;

class CreateStudentController extends Controller
{
    public function create ()
    {
        return view('admin.student.create');
    }
    
   
        
       public function store(Request $request){
        
        $validated = $request->validate([
            
            'first_name'    => 'required', 
            'last_name'     => 'required', 
            'email'         => 'required|email',
            'password'      => 'required',
            'role'          => 'Student', 
            'image'         => 'required|image|mimes:jpg,jpeg,png', 
            'phone'         => 'required', 
            'major'         => 'required', 
            'year'          => 'required', 
            'address'       => 'required', 
            'dob'           => 'required', 
            'enroll_date'   => 'required'
            
            
            ]);
            
            if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            
            $file->move(public_path('uploads/students/'), $fileName);
            $validated['image'] = 'uploads/students/' . $fileName;
            }
            
            $plainPassword = $validated['password'];
            $validated['password'] = Hash::make($validated['password']);
            
            $student = Student::create($validated);
            
             // Send Mail
                Mail::to($student->email)->send(new SendCredentialsMail(
                    $student->first_name . ' ' . $student->last_name,
                    $student->email,
                    $plainPassword
                ));
            
            return back()->with('success', 'Student Data Created Successfully');
    
        
    }
}
