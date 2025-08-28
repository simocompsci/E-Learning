<div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
    <div class="relative">
        <img class="h-48 w-full object-cover" src="{{ $image ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80' }}" alt="{{ $title ?? 'Course image' }}">
        <div class="absolute top-4 right-4">
            <span class="px-3 py-1 bg-indigo-600 text-white text-xs font-bold uppercase rounded-full shadow-md">
                {{ $category ?? 'Development' }}
            </span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
    </div>
    <div class="p-6 flex-1 flex flex-col">
        <div class="flex justify-between items-start mb-3">
            <h3 class="text-xl font-bold text-gray-900 pr-2">{{ $title ?? 'Course Title' }}</h3>
            <span class="text-indigo-600 font-bold text-lg whitespace-nowrap">{{ $price ?? '$49.99' }}</span>
        </div>

        <div class="flex items-center mb-4">
            <div class="flex items-center">
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < ($rating ?? 4))
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                        </svg>
                    @else
                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 24 24">
                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                        </svg>
                    @endif
                @endfor
            </div>
            <span class="text-gray-600 text-sm ml-2">{{ $reviewCount ?? '24' }} reviews</span>
        </div>

        <p class="text-gray-600 text-sm mb-5 leading-relaxed">{{ $description ?? 'Learn the fundamentals and advanced concepts in this comprehensive course.' }}</p>

        <div class="mt-auto flex items-center justify-between">
            <div class="flex items-center">
                <div class="relative">
                    <img class="h-10 w-10 rounded-full object-cover border-2 border-white shadow-sm" src="{{ $instructorImage ?? 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="{{ $instructorName ?? 'Instructor' }}">
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-white"></span>
                </div>
                <span class="ml-3 text-sm font-medium text-gray-700">{{ $instructorName ?? 'John Doe' }}</span>
            </div>
        </div>
    </div>
    <div class="px-6 pb-6">
        <a href="{{ $url ?? '#' }}" class="block w-full text-center px-6 py-3 text-base font-medium rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-300 shadow-md hover:shadow-lg">
            {{ $buttonText ?? 'Enroll Now' }}
            <svg class="w-4 h-4 inline-block ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
            </svg>
        </a>
    </div>
</div>
