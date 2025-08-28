<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-wider text-indigo-600 uppercase bg-indigo-50 rounded-full">{{ $tagline ?? 'Explore' }}</span>
            <h2 class="mt-6 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                {{ $title ?? 'Popular Categories' }}
            </h2>
            <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                {{ $description ?? 'Discover courses in our most popular categories and start learning today.' }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Category 1 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Web Development" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-xl font-bold text-white">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Web Development
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">Learn to build modern, responsive websites and web applications using the latest technologies.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-2 rounded-lg">
                                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">42 courses</p>
                                <p class="text-xs text-gray-500">12,500+ students</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Explore
                        </span>
                    </div>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Data Science" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-xl font-bold text-white">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Data Science
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">Master data analysis, machine learning, and visualization to extract insights from complex datasets.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-2 rounded-lg">
                                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">38 courses</p>
                                <p class="text-xs text-gray-500">9,800+ students</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Explore
                        </span>
                    </div>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Business" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-xl font-bold text-white">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Business
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">Develop essential business skills in management, marketing, finance, and entrepreneurship.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-2 rounded-lg">
                                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">56 courses</p>
                                <p class="text-xs text-gray-500">15,200+ students</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Explore
                        </span>
                    </div>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Design" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-xl font-bold text-white">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Design
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">Learn graphic design, UI/UX, illustration, and other creative skills from industry professionals.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-2 rounded-lg">
                                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">35 courses</p>
                                <p class="text-xs text-gray-500">8,900+ students</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Explore
                        </span>
                    </div>
                </div>
            </div>

            <!-- Category 5 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Personal Development" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-xl font-bold text-white">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Personal Development
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">Improve your productivity, leadership, communication, and other soft skills essential for success.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-2 rounded-lg">
                                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">48 courses</p>
                                <p class="text-xs text-gray-500">14,300+ students</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Explore
                        </span>
                    </div>
                </div>
            </div>

            <!-- Category 6 -->
            <div class="group relative bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60 z-10"></div>
                    <img src="https://images.unsplash.com/photo-1526498460520-4c246339dccb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mobile Development" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute bottom-4 left-4 z-20">
                        <h3 class="text-xl font-bold text-white">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Mobile Development
                            </a>
                        </h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 text-sm leading-relaxed">Build native and cross-platform mobile applications for iOS and Android devices.</p>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-100 p-2 rounded-lg">
                                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 极 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">29 courses</p>
                                <p class="text-xs text-gray-500">7,600+ students</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                            Explore
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="#all-categories" class="inline-flex items-center px-6 py-3.5 border border-transparent text-base font-medium rounded-xl shadow-md text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                View All Categories
                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 极 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
