<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher - EduManage</title>
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
                    <h1 class="text-2xl font-bold text-gray-900">Add New Teacher</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{route('admin.dashboard')}}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-200 transition">Back to Dashboard</a>
                    <a href="login.html" class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600 transition">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900 mb-6">Teacher Registration Form</h3>
                
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

                <form class="space-y-6" method="post" action="{{ route('admin.teacher.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="new-teacher-first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="new-teacher-first-name"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <div>
                            <label for="new-teacher-last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" name="last_name" id="new-teacher-last-name"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>

                    <div>
                        <label for="new-teacher-email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="new-teacher-email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    
                     <div>
                        <label for="new-teacher-password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="new-teacher-password"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="new-teacher-phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" name="phone" id="new-teacher-phone" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>

                    <div>
                        <label for="new-teacher-department" class="block text-sm font-medium text-gray-700">Department</label>
                        <select id="new-teacher-department" name="department" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                            <option value="">Select Department</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Science">Science</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Literature">Literature</option>
                            <option value="History">History</option>
                        </select>
                    </div>

                    <div>
                        <label for="new-teacher-subjects" class="block text-sm font-medium text-gray-700">Subjects</label>
                        <input type="text" name="subject" id="new-teacher-subjects" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary" placeholder="e.g., Algebra, Calculus, Geometry">
                    </div>

                    <div>
                        <label for="new-teacher-qualification" class="block text-sm font-medium text-gray-700">Qualification</label>
                        <input type="text" name="qualification" id="new-teacher-qualification" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary" placeholder="e.g., M.Sc. in Mathematics">
                    </div>

                    <div>
                        <label for="new-teacher-experience" class="block text-sm font-medium text-gray-700">Years of Experience</label>
                        <input type="number" name="experience" id="new-teacher-experience" min="0" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                            <label for="new-teacher-image" class="block text-sm font-medium text-gray-700">Teacher Image</label>
                            <input type="file" name="image" id="new-teacher-image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                    <div class="flex justify-end space-x-3">
                        <a href="{{route('admin.dashboard')}}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Cancel
                        </a>
                        <button type="submit" class="bg-primary border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Add Teacher
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
