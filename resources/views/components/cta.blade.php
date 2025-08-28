<div class="flex justify-center items-center p-6 mb-10">
  <div class="bg-indigo-700 rounded-3xl max-w-3xl w-full shadow-2xl">
    <div class="flex flex-col items-center text-center px-8 py-12 lg:py-16 gap-8">

      <!-- Text Content -->
      <div class="max-w-2xl">
        <h2 class="text-3xl sm:text-4xl font-bold text-white leading-tight">
          {{ $title ?? 'Ready to start learning?' }}
        </h2>
        <p class="mt-4 text-lg text-indigo-100 opacity-90">
          {{ $subtitle ?? 'Join thousands of students today.' }}
        </p>
      </div>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="{{ $primaryButtonUrl ?? '#register' }}"
           class="inline-flex items-center justify-center px-6 py-3.5 text-base font-semibold text-indigo-700 bg-white rounded-full shadow-lg hover:bg-indigo-50 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-xl">
          {{ $primaryButtonText ?? 'Get started' }}
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </a>
        <a href="{{ $secondaryButtonUrl ?? '#courses' }}"
           class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold text-white bg-indigo-600/30 rounded-full border border-indigo-400 hover:bg-indigo-600/50 transition-all duration-300 transform hover:-translate-y-0.5">
          {{ $secondaryButtonText ?? 'Browse courses' }}
        </a>
      </div>

    </div>
  </div>
</div>
