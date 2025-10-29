<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - EduManage</title>
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
                    <h1 class="text-2xl font-bold text-gray-900">Student Dashboard</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="student_profile.html" class="bg-primary text-white px-4 py-2 rounded-lg font-medium hover:bg-secondary transition">My Profile</a>
                    <a href="login.html" class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600 transition">Logout</a>
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
                                    <dt class="text-sm font-medium text-gray-500 truncate">Enrolled Courses</dt>
                                    <dd class="text-lg font-medium text-gray-900">4</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-success rounded-md p-3">
                                <i class="fas fa-tasks text-white text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Assignments Due</dt>
                                    <dd class="text-lg font-medium text-gray-900">3</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-warning rounded-md p-3">
                                <i class="fas fa-chart-line text-white text-xl"></i>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Average Grade</dt>
                                    <dd class="text-lg font-medium text-gray-900">88%</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses and Assignments -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                <!-- My Courses -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">My Courses</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Mathematics 101</p>
                                    <p class="text-sm text-gray-500">Prof. Johnson • Grade: 92%</p>
                                </div>
                                <a href="#" class="text-primary hover:text-secondary transition">Enter</a>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Physics Advanced</p>
                                    <p class="text-sm text-gray-500">Dr. Smith • Grade: 85%</p>
                                </div>
                                <a href="#" class="text-primary hover:text-secondary transition">Enter</a>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Computer Science</p>
                                    <p class="text-sm text-gray-500">Prof. Davis • Grade: 90%</p>
                                </div>
                                <a href="#" class="text-primary hover:text-secondary transition">Enter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Assignments -->
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Upcoming Assignments</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Calculus Final Exam</p>
                                    <p class="text-sm text-gray-500">Mathematics 101 • Due: May 15</p>
                                </div>
                                <span class="px-2 py-1 bg-warning text-white text-xs rounded-full">Urgent</span>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Physics Lab Report</p>
                                    <p class="text-sm text-gray-500">Physics Advanced • Due: May 18</p>
                                </div>
                                <span class="px-2 py-1 bg-primary text-white text-xs rounded-full">In Progress</span>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <div>
                                    <p class="font-medium">Programming Project</p>
                                    <p class="text-sm text-gray-500">Computer Science • Due: May 22</p>
                                </div>
                                <span class="px-2 py-1 bg-gray-400 text-white text-xs rounded-full">Not Started</span>
                            </div>
                        </div>

                        <h3 class="text-lg font-medium text-gray-900 mt-6 mb-4">Recent Grades</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <p class="font-medium">Mathematics Quiz 3</p>
                                <span class="px-2 py-1 bg-success text-white text-sm rounded">95%</span>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <p class="font-medium">Physics Midterm</p>
                                <span class="px-2 py-1 bg-success text-white text-sm rounded">88%</span>
                            </div>

                            <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                                <p class="font-medium">Literature Essay</p>
                                <span class="px-2 py-1 bg-success text-white text-sm rounded">92%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
