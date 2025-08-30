<nav class="bg-white/80 backdrop-blur-lg fixed w-full top-0 z-50 border-b border-gray-200/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600 flex items-center">
                        EduLearn
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden lg:ml-10 lg:flex lg:items-center lg:space-x-1">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-indigo-100/60 text-indigo-700' : 'text-gray-700 hover:text-indigo-600 hover:bg-white/50' }}">
                        Home
                    </a>
                    <a href="#courses" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50">
                        Courses
                    </a>
                    <button  class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50 relative group" id="categoriesButton">
                        Categories
                        <div class="absolute hidden group-hover:block top-full left-0 mt-2 w-80 bg-white rounded-xl shadow-2xl z-50 border border-gray-100 overflow-hidden transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                            <div class="p-4 border-b border-gray-100">
                                <div class="relative">
                                    <input type="text" placeholder="Search categories..." class="w-full py-2 pl-10 pr-4 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-sm">
                                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="max-h-96 overflow-y-auto p-2">
                                <!-- Programming -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Programming & Development</h3>
                                        <p class="text-xs text-gray-500">124 courses</p>
                                    </div>
                                </a>

                                <!-- Data Science -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Data Science & Analytics</h3>
                                        <p class="text-xs text-gray-500">87 courses</p>
                                    </div>
                                </a>

                                <!-- Design -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Design & Creative Arts</h3>
                                        <p class="text-xs text-gray-500">92 courses</p>
                                    </div>
                                </a>

                                <!-- Marketing -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-red-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Marketing & Business</h3>
                                        <p class="text-xs text-gray-500">115 courses</p>
                                    </div>
                                </a>

                                <!-- Languages -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Language Learning</h3>
                                        <p class="text-xs text-gray-500">76 courses</p>
                                    </div>
                                </a>

                                <!-- Music -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-pink-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Music & Audio</h3>
                                        <p class="text-xs text-gray-500">63 courses</p>
                                    </div>
                                </a>

                                <!-- Photography -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Photography & Video</h3>
                                        <p class="text-xs text-gray-500">58 courses</p>
                                    </div>
                                </a>

                                <!-- Health -->
                                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-indigo-50 transition-all duration-200">
                                    <div class="w-10 h-10 rounded-lg bg-teal-100 flex items-center justify-center mr-3 flex-shrink-0">
                                        <svg class="h-5 w-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-medium text-gray-800 text-sm">Health & Fitness</h3>
                                        <p class="text-xs text-gray-500">71 courses</p>
                                    </div>
                                </a>
                            </div>

                            <div class="p-4 border-t border-gray-100 bg-gray-50">
                                <a href="#" class="block text-center text-indigo-600 font-medium hover:text-indigo-800 text-sm">View all categories</a>
                            </div>
                        </div>
                    </button>
                    <a href="#about" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50">
                        About
                    </a>
                    <a href="#contact" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Search Bar (Desktop) -->
            <div class="hidden lg:flex lg:items-center lg:flex-1 lg:max-w-xl lg:mx-8 relative">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="Search courses..."
                        class="w-full pl-10 pr-4 py-2 rounded-full focus:ring-2 focus:ring-indigo-400/30 focus:border-transparent bg-white/80 placeholder-gray-500 text-gray-800 transition-all duration-300 backdrop-blur-sm outline-none"
                        id="courseSearchInput" />
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.5 4a7.5 7.5 0 010 15z" />
                        </svg>
                    </div>

                    <!-- Filter button -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2">
                        <button class="p-1 rounded-full hover:bg-indigo-50 transition-colors duration-200" id="filterToggleButton">
                            <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Filters panel -->
                <div class="absolute top-full left-0 right-0 mt-2 bg-white rounded-xl shadow-lg p-4 hidden z-10" id="filtersPanel">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Category filter -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Category</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500" checked>
                                    <span class="ml-2 text-sm text-gray-700">All Categories</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">Technology</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">Business</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">Design</span>
                                </label>
                            </div>
                        </div>

                        <!-- Level filter -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Level</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500" checked>
                                    <span class="ml-2 text-sm text-gray-700">All Levels</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">Beginner</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">Intermediate</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">Advanced</span>
                                </label>
                            </div>
                        </div>

                        <!-- Duration filter -->
                        <div>
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Duration</h3>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500" checked>
                                    <span class="ml-2 text-sm text-gray-700">Any Length</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">0-5 hours</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">5-10 hours</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500">
                                    <span class="ml-2 text-sm text-gray-700">10+ hours</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mt-4 space-x-3">
                        <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors duration-200">
                            Reset
                        </button>
                        <button class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 transition-colors duration-200">
                            Apply Filters
                        </button>
                    </div>
                </div>

                <!-- Search results dropdown -->
                <div class="absolute top-full left-0 right-0 mt-2 bg-white rounded-xl shadow-lg overflow-hidden z-20 hidden" id="searchResults">
                    <div class="p-3 border-b border-gray-200 bg-gray-50">
                        <p class="text-xs font-medium text-gray-600">Search results for "<span class="text-indigo-600" id="searchQueryText">UI Design</span>"</p>
                    </div>

                    <div class="max-h-80 overflow-y-auto">
                        <!-- Course result 1 -->
                        <div class="p-3 border-b border-gray-100 hover:bg-indigo-50 transition-colors duration-150 cursor-pointer">
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-indigo-100 flex items-center justify-center mr-3">
                                    <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">Advanced UI Design Principles</p>
                                    <p class="text-xs text-gray-500 mt-1">Design • 12 lessons • 4.8/5 rating</p>
                                </div>
                                <div class="flex-shrink-0 self-center">
                                    <span class="text-xs font-medium text-indigo-600">$89.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Course result 2 -->
                        <div class="p-3 border-b border-gray-100 hover:bg-indigo-50 transition-colors duration-150 cursor-pointer">
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center mr-3">
                                    <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">UI Development with React</p>
                                    <p class="text-xs text-gray-500 mt-1">Development • 18 lessons • 4.9/5 rating</p>
                                </div>
                                <div class="flex-shrink-0 self-center">
                                    <span class="text-xs font-medium text-indigo-600">$94.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Course result 3 -->
                        <div class="p-3 border-b border-gray-100 hover:bg-indigo-50 transition-colors duration-150 cursor-pointer">
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center mr-3">
                                    <svg class="h-6 w-6 text-purple-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">Mobile UI Design</p>
                                    <p class="text-xs text-gray-500 mt-1">Design • 15 lessons • 4.7/5 rating</p>
                                </div>
                                <div class="flex-shrink-0 self-center">
                                    <span class="text-xs font-medium text-indigo-600">$79.99</span>
                                </div>
                            </div>
                        </div>

                        <!-- Course result 4 -->
                        <div class="p-3 hover:bg-indigo-50 transition-colors duration-150 cursor-pointer">
                            <div class="flex">
                                <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-pink-100 flex items-center justify-center mr-3">
                                    <svg class="h-6 w-6 text-pink-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">Web UI Prototyping</p>
                                    <p class="text-xs text-gray-500 mt-1">Design • 9 lessons • 4.6/5 rating</p>
                                </div>
                                <div class="flex-shrink-0 self-center">
                                    <span class="text-xs font-medium text-indigo-600">$69.99</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 bg-gray-50 border-t border-gray-200 text-center">
                        <a href="#" class="text-xs font-medium text-indigo-600 hover:text-indigo-800">View all search results</a>
                    </div>
                </div>
            </div>


            <!-- Auth Links (Desktop) -->
            <div class="hidden lg:flex lg:items-center lg:space-x-3">
                <a href="{{ route('Login') }}" class="px-4 py-2 rounded-full text-sm font-medium text-indigo-600 hover:text-indigo-700 hover:bg-white/50 transition-all duration-200">
                    Log in
                </a>
                <a href="{{ route('Register') }}" class="px-4 py-2 rounded-full text-sm font-medium text-white bg-indigo-600/90 hover:bg-indigo-700 shadow-sm hover:shadow-md transition-all duration-200 transform hover:-translate-y-0.5 backdrop-blur-sm">
                    Register
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden">
                <!-- Mobile Search Icon -->
                <button type="button" class="mobile-search-button p-2 rounded-md text-gray-500 hover:text-indigo-600 hover:bg-white/50 mr-2 transition-all duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.5 4a7.5 7.5 0 010 15z" />
                    </svg>
                </button>

                <!-- Mobile Menu Button -->
                <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-indigo-600 hover:bg-white/50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500/30 transition-all duration-200">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Search Bar (Hidden by default) -->
    <div class="lg:hidden hidden bg-white/90 backdrop-blur-lg" id="mobile-search">
        <div class="px-4 pt-2 pb-3">
            <div class="relative mt-2">
                <input
                    type="text"
                    placeholder="Search courses..."
                    class="w-full pl-10 pr-4 py-3 rounded-full border border-gray-200/50 focus:ring-2 focus:ring-indigo-400/30 focus:border-transparent bg-white/80 placeholder-gray-500 text-gray-800 backdrop-blur-sm" />
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.5 4a7.5 7.5 0 010 15z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state -->
    <div class="lg:hidden hidden bg-white/95 backdrop-blur-lg" id="mobile-menu">
        <div class="pt-2 pb-3 px-4 space-y-1">
            <a href="{{ route('home') }}" class="block pl-3 pr-4 py-3 rounded-lg text-base font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-indigo-100/60 text-indigo-700' : 'text-gray-700 hover:bg-white/70 hover:text-indigo-600' }}">
                Home
            </a>
            <a href="#courses" class="block pl-3 pr-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:bg-white/70 hover:text-indigo-600 transition-all duration-200">
                Courses
            </a>
            <a href="#" class="block pl-3 pr-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:bg-white/70 hover:text-indigo-600 transition-all duration-200">
                Categories
            </a>
            <a href="#about" class="block pl-3 pr-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:bg-white/70 hover:text-indigo-600 transition-all duration-200">
                About
            </a>
            <a href="#contact" class="block pl-3 pr-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:bg-white/70 hover:text-indigo-600 transition-all duration-200">
                Contact
            </a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200/30 px-4 bg-gray-50/50">
            <div class="space-y-2">
                <a href="#login" class="block px-4 py-3 rounded-lg text-base font-medium text-gray-700 hover:bg-white/70 hover:text-indigo-600 transition-all duration-200">
                    Log in
                </a>
                <a href="#register" class="block px-4 py-3 rounded-lg text-base font-medium text-white bg-indigo-600/90 hover:bg-indigo-700 shadow-sm transition-all duration-200">
                    Register
                </a>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        // Mobile search functionality
        const mobileSearchButton = document.querySelector('.mobile-search-button');
        const mobileSearch = document.getElementById('mobile-search');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);

            // Toggle the menu icons
            mobileMenuButton.querySelectorAll('svg').forEach(svg => {
                svg.classList.toggle('hidden');
                svg.classList.toggle('block');
            });

            // Close search if open
            if (!mobileSearch.classList.contains('hidden')) {
                mobileSearch.classList.add('hidden');
            }
        });

        mobileSearchButton.addEventListener('click', function() {
            mobileSearch.classList.toggle('hidden');

            // Close menu if open
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.querySelectorAll('svg').forEach(svg => {
                    svg.classList.toggle('hidden');
                    svg.classList.toggle('block');
                });
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('courseSearchInput');
        const filterToggleButton = document.getElementById('filterToggleButton');
        const filtersPanel = document.getElementById('filtersPanel');
        const searchResults = document.getElementById('searchResults');
        const searchQueryText = document.getElementById('searchQueryText');

        // Toggle filters panel
        filterToggleButton.addEventListener('click', function() {
            filtersPanel.classList.toggle('hidden');
            searchResults.classList.add('hidden');
        });

        // Show search results when typing
        searchInput.addEventListener('focus', function() {
            if (this.value.length > 0) {
                searchResults.classList.remove('hidden');
            }
            filtersPanel.classList.add('hidden');
        });

        searchInput.addEventListener('input', function() {
            if (this.value.length > 0) {
                searchResults.classList.remove('hidden');
                searchQueryText.textContent = this.value;
            } else {
                searchResults.classList.add('hidden');
            }
            filtersPanel.classList.add('hidden');
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.relative')) {
                filtersPanel.classList.add('hidden');
                if (searchInput.value.length === 0) {
                    searchResults.classList.add('hidden');
                }
            }
        });
    });
</script>
<script>
    // Add toggle functionality for mobile devices
    document.addEventListener('DOMContentLoaded', function() {
        const categoriesButton = document.getElementById('categoriesButton');

        // Toggle dropdown on click for mobile
        categoriesButton.addEventListener('click', function(e) {
            if (window.innerWidth < 1024) { // Only for mobile
                e.preventDefault();
                const dropdown = this.querySelector('div');
                dropdown.classList.toggle('hidden');
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!categoriesButton.contains(e.target) && window.innerWidth < 1024) {
                const dropdown = categoriesButton.querySelector('div');
                dropdown.classList.add('hidden');
            }
        });
    });
</script>
@endpush
