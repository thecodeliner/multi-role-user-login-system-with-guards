<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduManage - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4361ee',
                        secondary: '#3a0ca3',
                        success: '#4cc9f0',
                        danger: '#f72585',
                        warning: '#f8961e',
                        dark: '#212529',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-blue-500 to-purple-700 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-4xl bg-white rounded-xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
        <!-- Welcome Section -->
        <div class="md:w-1/2 bg-gradient-to-br from-primary to-secondary text-white p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-bold mb-2">EduManage</h1>
                <p class="text-blue-100">Role-Based Education Management System</p>
            </div>

            <div class="space-y-4">
                <div class="flex items-start">
                    <i class="fas fa-user-shield text-xl mt-1 mr-4"></i>
                    <div>
                        <h3 class="font-bold text-lg">Admin Access</h3>
                        <p class="text-blue-100">Manage users, courses, and system settings</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <i class="fas fa-chalkboard-teacher text-xl mt-1 mr-4"></i>
                    <div>
                        <h3 class="font-bold text-lg">Teacher Dashboard</h3>
                        <p class="text-blue-100">Create courses, manage students, and track progress</p>
                    </div>
                </div>

                <div class="flex items-start">
                    <i class="fas fa-user-graduate text-xl mt-1 mr-4"></i>
                    <div>
                        <h3 class="font-bold text-lg">Student Portal</h3>
                        <p class="text-blue-100">Access courses, submit assignments, and view grades</p>
                    </div>
                </div>
            </div>
        </div>
        
       

        <!-- Login Form -->
        <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
                <p class="text-gray-600">Sign in to your account</p>
            </div>
            
             @include('message.message')
            
            <form action="{{route('login')}}" method="post" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition">
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Login As</label>
                    <select id="role" name="role" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition">
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="web">Administrator</option>
                    </select>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="h-4 w-4 text-primary rounded focus:ring-primary">
                        <label for="remember" class="ml-2 text-sm text-gray-700">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-primary hover:underline">Forgot password?</a>
                </div>

                <div class="space-y-3">
                    <button type="submit" class="w-full bg-primary text-white py-3 px-4 rounded-lg font-medium hover:bg-secondary transition focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">
                        Sign In
                    </button>
                    <div class="grid grid-cols-3 gap-2">
                        <a href="{{ route('admin.dashboard') }}" class="text-center bg-gray-100 text-gray-700 py-2 px-4 rounded-lg font-medium hover:bg-gray-200 transition">
                            Admin
                        </a>
                        <a href="{{ route('teacher.dashboard') }}" class="text-center bg-gray-100 text-gray-700 py-2 px-4 rounded-lg font-medium hover:bg-gray-200 transition">
                            Teacher
                        </a>
                        <a href="{{ route('student.dashboard') }}" class="text-center bg-gray-100 text-gray-700 py-2 px-4 rounded-lg font-medium hover:bg-gray-200 transition">
                            Student
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
