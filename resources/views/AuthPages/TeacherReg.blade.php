<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Teacher Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }



        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.3);
        }

        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="flex items-center justify-center py-8 px-4 bg-gray-200">

    <div class="relative w-full max-w-4xl mx-auto">
        <!-- Teacher Registration Form -->
        <div class="bg-white rounded-2xl p-8 border border-gray-300">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Teacher Registration</h1>
                <p class="text-gray-600">Create your account to start teaching</p>
            </div>

            <form>
                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-gray-700 mb-2" for="first-name">First Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <i class="far fa-user"></i>
                            </div>
                            <input type="text" id="first-name" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500" placeholder="First Name">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2" for="last-name">Last Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <i class="far fa-user"></i>
                            </div>
                            <input type="text" id="last-name" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500" placeholder="Last Name">
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 mb-2" for="email">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="far fa-envelope"></i>
                        </div>
                        <input type="email" id="email" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500" placeholder="Enter your email">
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 mb-2" for="expertise">Area of Expertise</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fas fa-book"></i>
                        </div>
                        <select id="expertise" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500">
                            <option value="">Select your expertise</option>
                            <option value="programming">Programming</option>
                            <option value="design">Design</option>
                            <option value="business">Business</option>
                            <option value="science">Science</option>
                            <option value="math">Mathematics</option>
                            <option value="language">Language</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 mb-2" for="experience">Years of Experience</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <i class="fas fa-clock"></i>
                        </div>
                        <select id="experience" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500">
                            <option value="">Select years of experience</option>
                            <option value="0-2">0-2 years</option>
                            <option value="3-5">3-5 years</option>
                            <option value="6-10">6-10 years</option>
                            <option value="10+">10+ years</option>
                        </select>
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 mb-2" for="bio">Short Bio</label>
                    <textarea id="bio" rows="3" class="p-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500" placeholder="Tell us about yourself and your teaching experience"></textarea>
                </div>

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-gray-700 mb-2" for="password">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <i class="fas fa-lock"></i>
                            </div>
                            <input type="password" id="password" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500" placeholder="Create a password">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2" for="confirm-password">Confirm Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <i class="fas fa-lock"></i>
                            </div>
                            <input type="password" id="confirm-password" class="pl-10 pr-4 py-3 w-full border border-gray-300 rounded-lg input-focus focus:outline-none focus:border-purple-500" placeholder="Confirm your password">
                        </div>
                    </div>
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" id="terms" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="terms" class="ml-2 block text-sm text-gray-700">I agree to the <a href="#" class="text-purple-600 hover:underline">Terms of Service</a> and <a href="#" class="text-purple-600 hover:underline">Privacy Policy</a></label>
                </div>

                <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-semibold transition-all">Create Account</button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600">Already have an account? <a href="#" class="text-purple-600 font-semibold hover:underline">Sign In</a></p>
            </div>
        </div>
    </div>

    <div class="absolute bottom-5 right-5">
        <div class="text-white text-sm">
            &copy; 2023 EduLearn. All rights reserved.
        </div>
    </div>
</body>
</html>
