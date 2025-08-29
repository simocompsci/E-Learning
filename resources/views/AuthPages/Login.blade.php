<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform | Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .card-shadow {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.3);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .role-option:hover {
            transform: translateY(-5px);
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

<body class="min-h-screen flex items-center justify-center py-8 px-4 bg-gray-200">


    <div class="relative w-full max-w-4xl mx-auto">
        <!-- Login Form -->
        <div class="bg-white rounded-2xl p-8 border border-gray-300">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back!</h2>
                    <p class="text-gray-600 mb-8">Sign in to continue your learning journey</p>

                    <form>
                        <div class="mb-5">
                            <label class="block text-gray-700 mb-2" for="login-email">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <input type="email" id="login-email" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500" placeholder="Enter your email">
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 mb-2" for="login-password">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <input type="password" id="login-password" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-blue-500" placeholder="Enter your password">
                            </div>
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-all">Sign In</button>
                    </form>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Don't have an account? <a href="{{route('Register')}}" id="goToRegister" class="text-blue-600 font-semibold hover:underline">Register Now</a></p>
                    </div>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600">Or sign in with</p>
                        <div class="flex justify-center space-x-4 mt-3">
                            <button class="p-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gray-50 transition-all">
                                <i class="fab fa-google"></i>
                            </button>
                            <button class="p-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gray-50 transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button class="p-2 border border-gray-300 rounded-full text-gray-600 hover:bg-gray-50 transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="hidden md:flex items-center justify-center ">
                    <div>
                        <img src="{{ asset('images/pexels-julia-m-cameron-4144927.jpg') }}" alt="Image" class="rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
