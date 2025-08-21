<div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
    <div class="relative">
        <img class="h-48 w-full object-cover" src="{{ $image ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80' }}" alt="{{ $title ?? 'Course image' }}">
        <div class="absolute top-0 right-0 p-2 bg-indigo-600 text-white text-xs font-bold uppercase rounded-bl-lg">
            {{ $category ?? 'Development' }}
        </div>
    </div>
    <div class="p-6 flex-1 flex flex-col">
        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $title ?? 'Course Title' }}</h3>
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
        <p class="text-gray-600 text-sm flex-1">{{ $description ?? 'Learn the fundamentals and advanced concepts in this comprehensive course.' }}</p>
        <div class="mt-4 flex items-center justify-between">
            <div class="flex items-center">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ $instructorImage ?? 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="{{ $instructorName ?? 'Instructor' }}">
                <span class="ml-2 text-sm text-gray-700">{{ $instructorName ?? 'John Doe' }}</span>
            </div>
            <span class="text-indigo-600 font-bold">{{ $price ?? '$49.99' }}</span>
        </div>
    </div>
    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
        <a href="{{ $url ?? '#' }}" class="block w-full text-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            {{ $buttonText ?? 'Enroll Now' }}
        </a>
    </div>
</div>