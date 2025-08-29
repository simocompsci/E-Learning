<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Choose Your Role</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }


        .transition-all {
            transition: all 0.3s ease;
        }

        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        .role-card {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .role-card:hover {
            transform: translateY(-10px);
            border-color: #4361ee;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>
</head>

<body class="flex items-center justify-center py-8 px-4 bg-gray-200">

    <div class="relative w-full max-w-4xl mx-auto">
        <!-- Role Selection -->
        <div class="bg-white rounded-2xl p-8 border-gray-300">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Join Our Learning Community</h1>
                <p class="text-gray-600">Select your role to get started with your educational journey</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Student Card -->
                <div class="role-card bg-white rounded-xl p-6 text-center cursor-pointer transition-all">
                    <div class="bg-blue-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-user-graduate text-blue-600 text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Student</h3>
                    <p class="text-gray-600 mb-5">Join courses, learn new skills, and track your progress</p>
                    <ul class="text-left text-gray-600 mb-6">
                        <li class="mb-2"><i class="fas fa-check-circle text-blue-500 mr-2"></i> Access to all courses</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-blue-500 mr-2"></i> Progress tracking</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-blue-500 mr-2"></i> Student community</li>
                        <li><i class="fas fa-check-circle text-blue-500 mr-2"></i> Certificate upon completion</li>
                    </ul>
                    <a href="{{route('StudentReg')}}">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-all">
                            Continue as Student
                        </button>
                    </a>
                </div>

                <!-- Teacher Card -->
                <div class="role-card bg-white rounded-xl p-6 text-center cursor-pointer transition-all">
                    <div class="bg-purple-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-chalkboard-teacher text-purple-600 text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Teacher</h3>
                    <p class="text-gray-600 mb-5">Create courses, share knowledge, and earn income</p>
                    <ul class="text-left text-gray-600 mb-6">
                        <li class="mb-2"><i class="fas fa-check-circle text-purple-500 mr-2"></i> Course creation tools</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-purple-500 mr-2"></i> Student management</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-purple-500 mr-2"></i> Revenue sharing</li>
                        <li><i class="fas fa-check-circle text-purple-500 mr-2"></i> Teacher support</li>
                    </ul>
                    <a href="{{route('TeacherReg')}}">
                        <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-semibold transition-all">
                            Continue as Teacher
                        </button>
                    </a>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-gray-600">Already have an account? <a href="#" class="text-blue-600 font-semibold hover:underline">Sign In</a></p>
            </div>
        </div>
    </div>

</body>

</html>
