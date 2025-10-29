<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

use App\Http\Controllers\CreateStudentController;
use App\Http\Controllers\CreateTeacherController;
use Illuminate\Support\Facades\Route;

//login route
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');

Route::post('/login', [AuthController::class, 'login'])->name('login');

//admin route
Route::get('admin/dashboard', [AdminController::class, 'showAdminDashboard'])->name('admin.dashboard')->middleware('isAdmin');

Route::get('admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile')->middleware('isAdmin');

Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//create admin route
Route::get('/admin/create-admin', [AdminController::class, 'createAdmin'])->name('admin.create');
Route::post('/admin/create-admin', [AdminController::class, 'storeAdmin'])->name('admin.store');

//create student and teachers
Route::get('student/add-student', [CreateStudentController::class, 'create'])->name('admin.student.create')->middleware('isAdmin');

Route::post('student/add-student', [CreateStudentController::class, 'store'])->name('admin.student.store')->middleware('isAdmin');

Route::get('teacher/add-teacher', [CreateTeacherController::class, 'create'])->name('admin.teacher.create')->middleware('isAdmin');

Route::post('teacher/add-teacher', [CreateTeacherController::class, 'store'])->name('admin.teacher.store')->middleware('isAdmin');


//student route
Route::get('student/dashboard', [StudentController::class, 'studentDashboard'])->name('student.dashboard')->middleware('isStudent');

Route::get('student/profile', [StudentController::class, 'studentProfile'])->name('student.profile')->middleware('isStudent');

Route::get('student/logout', [StudentController::class, 'logout'])->name('student.logout');


//teacher route
Route::get('teacher/dashboard', [TeacherController::class, 'teacherDashboard'])->name('teacher.dashboard')->middleware('isTeacher');

Route::get('teacher/profile', [TeacherController::class, 'teacherProfile'])->name('teacher.profile')->middleware('isTeacher');

Route::get('teacher/logout', [TeacherController::class, 'logout'])->name('teacher.logout');

