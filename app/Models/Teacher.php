<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{
    protected $fillable = [
        
        'first_name', 'last_name', 'email', 'password', 'image', 'phone', 'department', 'subject', 'qualification', 'experience'
        
        ];
        
        protected $hidden = [
            'password'
            ];
}
