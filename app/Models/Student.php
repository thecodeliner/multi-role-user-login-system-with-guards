<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends User
{
    protected $fillable = [
        
        'first_name', 'last_name', 'password', 'email', 'role', 'image', 'phone', 'major', 'year', 'address', 'dob', 'enroll_date'
        
        ];
        
          protected $hidden = [
            'password'
            
            ];
}
