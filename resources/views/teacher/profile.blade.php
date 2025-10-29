<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Profile - EduManage</title>
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
                    <h1 class="text-2xl font-bold text-gray-900">Teacher Profile</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('teacher.dashboard') }}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-200 transition">Back to Dashboard</a>
                    <a href="{{ route('teacher.logout') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600 transition">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6">Teacher Profile Information</h3>

                <form class="space-y-6">
                    <div class="flex items-center space-x-6 mb-6">
                        <div class="flex-shrink-0">
                            <div class="h-24 w-24 rounded-full bg-primary flex items-center justify-center text-white text-2xl font-bold">
                                JS
                            </div>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold">{{ $teacher->first_name }} {{ $teacher->last_name }}</h4>
                            <p class="text-gray-500">{{ $teacher->department }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="teacher-first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="teacher-first-name" value="{{ $teacher->first_name }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="teacher-last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="teacher-last-name" value="{{ $teacher->last_name }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>

                    <div>
                        <label for="teacher-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="teacher-email" value="{{ $teacher->email }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="teacher-phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="teacher-phone" value="{{ $teacher->phone }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="teacher-department" class="block text-sm font-medium text-gray-700">Department</label>
                        <input type="tel" id="teacher-phone" value="{{ $teacher->department }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">

                    </div>

                    <div>
                        <label for="teacher-subjects" class="block text-sm font-medium text-gray-700">Subjects</label>
                        <input type="text" id="teacher-subjects" value="{{ $teacher->subject }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="teacher-bio" class="block text-sm font-medium text-gray-700">Bio</label>
                        <textarea id="teacher-bio" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">Mathematics professor with 10 years of teaching experience. Specialized in advanced calculus and linear algebra. Passionate about helping students develop strong problem-solving skills.</textarea>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('teacher.dashboard') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Cancel
                        </a>
                        <button type="submit" class="bg-primary border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
