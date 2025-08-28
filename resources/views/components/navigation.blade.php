<nav class="bg-white/80 backdrop-blur-lg fixed w-full top-0 z-50 border-b border-gray-200/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600 flex items-center">
                        <svg class="w-8 h-8 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v8"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9 5 9-5"></path>
                        </svg>
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
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50">
                        Categories
                    </a>
                    <a href="#about" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50">
                        About
                    </a>
                    <a href="#contact" class="px-3 py-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-700 hover:text-indigo-600 hover:bg-white/50">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Search Bar (Desktop) -->
            <div class="hidden lg:flex lg:items-center lg:flex-1 lg:max-w-xl lg:mx-8">
                <div class="relative w-full">
                    <input
                        type="text"
                        placeholder="Search courses..."
                        class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-200/50 focus:ring-2 focus:ring-indigo-400/30 focus:border-transparent bg-white/70 placeholder-gray-500 text-gray-800 transition-all duration-300 backdrop-blur-sm"
                    />
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.5 4a7.5 7.5 0 010 15z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Auth Links (Desktop) -->
            <div class="hidden lg:flex lg:items-center lg:space-x-3">
                <a href="#login" class="px-4 py-2 rounded-full text-sm font-medium text-indigo-600 hover:text-indigo-700 hover:bg-white/50 transition-all duration-200">
                    Log in
                </a>
                <a href="#register" class="px-4 py-2 rounded-full text-sm font-medium text-white bg-indigo-600/90 hover:bg-indigo-700 shadow-sm hover:shadow-md transition-all duration-200 transform hover:-translate-y-0.5 backdrop-blur-sm">
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
                    class="w-full pl-10 pr-4 py-3 rounded-full border border-gray-200/50 focus:ring-2 focus:ring-indigo-400/30 focus:border-transparent bg-white/80 placeholder-gray-500 text-gray-800 backdrop-blur-sm"
                />
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
@endpush
