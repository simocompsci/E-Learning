<div class="relative bg-gray-50 mt-10 overflow-hidden min-h-screen">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
      <!-- Content Section -->
      <div class="pt-12 sm:pt-16 lg:pt-20 xl:pt-24 px-4 sm:px-6 lg:px-8 lg:py-12">
        <div class="relative">
          <!-- Decorative element -->
          <div class="absolute -top-4 -left-4 w-20 h-20 rounded-full bg-indigo-100 opacity-50 animate-pulse"></div>
          <div class="absolute -bottom-4 -right-4 w-16 h-16 rounded-full bg-indigo-200 opacity-30"></div>

          <div class="relative">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl leading-tight">
              <span class="block xl:inline">{{ $title ?? 'Learn Without Limits' }}</span>
              <span class="block text-indigo-600 xl:inline mt-2">{{ $subtitle ?? 'Anytime, Anywhere' }}</span>
            </h1>
            <p class="mt-6 text-lg text-gray-600 md:text-xl lg:pr-12">
              {{ $description ?? 'Access high-quality courses taught by industry experts. Expand your skills, advance your career, and discover a world of knowledge at your fingertips.' }}
            </p>

            <!-- Call to Action Buttons -->
            <div class="mt-8 flex flex-col sm:flex-row sm:space-x-4 space-y-3 sm:space-y-0">
              <a href="{{ $primaryButtonUrl ?? '#courses' }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                {{ $primaryButtonText ?? 'Get Started' }}
                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
              <a href="{{ $secondaryButtonUrl ?? '#learn-more' }}" class="inline-flex items-center justify-center px-6 py-3 border border-indigo-200 text-indigo-700 bg-white hover:bg-indigo-50 rounded-xl text-base font-medium transition-all duration-200 shadow-sm hover:shadow-md">
                {{ $secondaryButtonText ?? 'Learn More' }}
                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Image Section -->
      <div class="mt-12 lg:mt-0 relative">
        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:px-0 lg:py-12">
          <!-- Decorative background -->
          <div class="absolute inset-0 lg:left-10 transform lg:skew-x-6 lg:rounded-3xl bg-indigo-100 lg:bg-gradient-to-r lg:from-indigo-100 lg:to-indigo-50 w-full h-5/6 lg:h-full"></div>

          <div class="relative lg:rounded-3xl overflow-hidden shadow-2xl lg:transform lg:skew-x-3 lg:-rotate-2 transition-all duration-500 hover:rotate-0 hover:skew-x-0">
            <img class="w-full h-96 object-cover lg:h-full lg:max-h-600px" src="{{ $image ?? 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80' }}" alt="{{ $imageAlt ?? 'Education illustration' }}">

            <!-- Floating card element -->
            <div class="absolute bottom-6 right-6 bg-white p-4 rounded-xl shadow-lg max-w-xs transform transition-all duration-300 hover:-translate-y-2">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905a3.61 3.61 0 01-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                    </svg>
                  </div>
                </div>
                <div class="ml-3">
                  <p class="text-sm font-medium text-gray-900">Interactive Learning</p>
                  <p class="text-xs text-gray-500">Join 50,000+ students</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
