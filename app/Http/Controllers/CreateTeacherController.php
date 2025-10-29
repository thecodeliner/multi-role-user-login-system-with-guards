<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendCredentialsMail;

class CreateTeacherController extends Controller
{
     public function create ()
    {
        return view('admin.teacher.create');
    }
    
    public function store(Request $request){
        
        $validated = $request->validate([
            
            'first_name'    => 'required', 
            'last_name'     => 'required', 
            'email'         => 'required|email', 
            'password'      => 'required',
            'role'          => 'Teacher', 
            'image'         => 'required|image|mimes:jpg,jpeg,png', 
            'phone'         => 'required', 
            'department'    => 'required', 
            'subject'        => 'required', 
            'qualification'  => 'required', 
            'experience'    => 'required', 
            
            
            
            ]);
            
            if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            
            $file->move(public_path('uploads/teachers/'), $fileName);
            $validated['image'] = 'uploads/teachers/' . $fileName;
            }
            
            $plainPassword = $validated['password'];
            $validated['password'] = Hash::make($validated['password']);
            
            $teacher = Teacher::create($validated);
            
            // Send Mail
                Mail::to($teacher->email)->send(new SendCredentialsMail(
                    $teacher->first_name . ' ' . $teacher->last_name,
                    $teacher->email,
                    $plainPassword
                ));
            
            return back()->with('success', 'Teacher Data Created Successfully');
    
        
    }
}
