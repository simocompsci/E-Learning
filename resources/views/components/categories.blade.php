<div class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">{{ $tagline ?? 'Explore' }}</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                {{ $title ?? 'Popular Categories' }}
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                {{ $description ?? 'Discover courses in our most popular categories and start learning today.' }}
            </p>
        </div>

        <div class="mt-10">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Category 1 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Web Development" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Web Development
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Learn to build modern, responsive websites and web applications using the latest technologies.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm font-medium text-indigo-600">42 courses</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-sm text-gray-500">12,500+ students</span>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Data Science" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Data Science
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Master data analysis, machine learning, and visualization to extract insights from complex datasets.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm font-medium text-indigo-600">38 courses</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-sm text-gray-500">9,800+ students</span>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Business" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Business
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Develop essential business skills in management, marketing, finance, and entrepreneurship.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm font-medium text-indigo-600">56 courses</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-sm text-gray-500">15,200+ students</span>
                        </div>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Design" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Design
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Learn graphic design, UI/UX, illustration, and other creative skills from industry professionals.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm font-medium text-indigo-600">35 courses</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-sm text-gray-500">8,900+ students</span>
                        </div>
                    </div>
                </div>

                <!-- Category 5 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Personal Development" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Personal Development
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Improve your productivity, leadership, communication, and other soft skills essential for success.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm font-medium text-indigo-600">48 courses</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-sm text-gray-500">14,300+ students</span>
                        </div>
                    </div>
                </div>

                <!-- Category 6 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 group-hover:opacity-75 transition-opacity duration-300">
                        <img src="https://images.unsplash.com/photo-1526498460520-4c246339dccb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mobile Development" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Mobile Development
                            </a>
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">Build native and cross-platform mobile applications for iOS and Android devices.</p>
                        <div class="mt-4 flex items-center">
                            <span class="text-sm font-medium text-indigo-600">29 courses</span>
                            <span class="mx-2 text-gray-500">•</span>
                            <span class="text-sm text-gray-500">7,600+ students</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#all-categories" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                    View All Categories
                    <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>