<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard - EduManage</title>
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
<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">Teacher Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('teacher.profile') }}" class="bg-primary text-white px-4 py-2 rounded-lg font-medium hover:bg-secondary transition">My Profile</a>
                    <a href="{{ route('teacher.logout') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600 transition">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <!-- Stats -->
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 mb-8">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary rounded-md p-3">
                                <i class="fas fa-book-open text-white text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">My Courses</dt>
                                    <dd class="text-lg font-medium text-gray-900">5</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-success rounded-md p-3">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Total Students</dt>
                                    <dd class="text-lg font-medium text-gray-900">142</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-warning rounded-md p-3">
                                <i class="fas fa-tasks text-white text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Assignments to Grade</dt>
                                    <dd class="text-lg font-medium text-gray-900">23</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses and Activity -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <!-- My Courses -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">My Courses</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Mathematics 101</p>
                                    <p class="text-sm text-gray-500">42 students • 5 assignments</p>
                                </div>
                                <a href="#" class="text-primary hover:text-secondary transition">View</a>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Physics Advanced</p>
                                    <p class="text-sm text-gray-500">38 students • 3 assignments</p>
                                </div>
                                <a href="#" class="text-primary hover:text-secondary transition">View</a>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Computer Science</p>
                                    <p class="text-sm text-gray-500">62 students • 7 assignments</p>
                                </div>
                                <a href="#" class="text-primary hover:text-secondary transition">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start p-3 bg-gray-50 rounded-lg">
                                <div class="w-10 h-10 bg-success rounded-full flex items-center justify-center text-white mt-1">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium">Assignment graded</p>
                                    <p class="text-sm text-gray-500">Mathematics 101 - Calculus Quiz</p>
                                    <p class="text-xs text-gray-400">2 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-start p-3 bg-gray-50 rounded-lg">
                                <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white mt-1">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium">New student enrolled</p>
                                    <p class="text-sm text-gray-500">Sarah Wilson joined Physics Advanced</p>
                                    <p class="text-xs text-gray-400">5 hours ago</p>
                                </div>
                            </div>

                            <div class="flex items-start p-3 bg-gray-50 rounded-lg">
                                <div class="w-10 h-10 bg-warning rounded-full flex items-center justify-center text-white mt-1">
                                    <i class="fas fa-exclamation"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium">Assignment due soon</p>
                                    <p class="text-sm text-gray-500">Computer Science - Final Project</p>
                                    <p class="text-xs text-gray-400">1 day ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
