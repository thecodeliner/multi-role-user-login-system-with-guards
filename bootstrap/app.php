<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\isStudent;
use App\Http\Middleware\isTeacher;
use App\Http\Middleware\isAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        $middleware->alias([
        
            'isStudent' => isStudent::class,
            'isTeacher' => isTeacher::class,
            'isAdmin' => isAdmin::class,
            
            ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
