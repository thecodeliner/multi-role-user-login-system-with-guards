<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student - EduManage</title>
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
                    <h1 class="text-2xl font-bold text-gray-900">Add New Student</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{route('admin.dashboard')}}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-200 transition">Back to Dashboard</a>
                    <a href="{{ route('admin.logout') }}" class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600 transition">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6">Student Registration Form</h3>

                <div class="error">
                    @if($errors->any)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="success">
                    @if(@session('success'))

                    <p class="text-green-500">{{ session('success') }}</p>

                    @endif
                </div>

                <form class="space-y-6" method="post" action="{{ route('admin.student.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="new-student-first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="new-student-first-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="new-student-last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" name="last_name" id="new-student-last-name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>

                    <div>
                        <label for="new-student-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="new-student-email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="new-student-password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="new-student-password"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="new-student-phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" name="phone" id="new-student-phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="new-student-major" class="block text-sm font-medium text-gray-700">Major</label>
                        <select id="new-student-major" name="major" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                            <option value="">Select Major</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Physics">Physics</option>
                            <option value="Biology">Biology</option>
                            <option value="Business Administration">Business Administration</option>
                        </select>
                    </div>

                    <div>
                        <label for="new-student-year" class="block text-sm font-medium text-gray-700">Year</label>
                        <select id="new-student-year" name="year" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                            <option value="">Select Year</option>
                            <option value="1st Year" >1st Year</option>
                            <option value="2nd Year" >2nd Year</option>
                            <option value="3rd Year" >3rd Year</option>
                            <option value="4th Year" >4th Year</option>
                        </select>
                    </div>

                    <div>
                        <label for="new-student-address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea id="new-student-address" name="address" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary"></textarea>
                    </div>

                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="new-student-dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" name="dob" id="new-student-dob" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="new-student-enrollment" class="block text-sm font-medium text-gray-700">Enrollment Date</label>
                            <input type="date" name="enroll_date" id="new-student-enrollment" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="new-student-image" class="block text-sm font-medium text-gray-700">Student Image</label>
                            <input type="file" name="image" id="new-student-image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                    </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{route('admin.dashboard')}}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Cancel
                        </a>
                        <button type="submit" class="bg-primary border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Add Student
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
