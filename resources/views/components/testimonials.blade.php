<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center mb-12">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">{{ $tagline ?? 'Testimonials' }}</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                {{ $title ?? 'What Our Students Say' }}
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                {{ $description ?? 'Hear from our students about how our platform has helped them achieve their learning goals and advance their careers.' }}
            </p>
        </div>
        
        <div class="mt-10">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col">
                    <div class="flex-1">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <p class="text-gray-600 italic mb-6">"The courses on this platform have been instrumental in helping me transition into a new career in web development. The instructors are knowledgeable and the content is up-to-date with industry standards."</p>
                    </div>
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sarah Johnson">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Sarah Johnson</h4>
                            <p class="text-gray-600">Web Developer</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col">
                    <div class="flex-1">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <p class="text-gray-600 italic mb-6">"As a busy professional, I appreciate the flexibility this platform offers. I can learn at my own pace and the mobile app makes it easy to continue my studies even when I'm on the go."</p>
                    </div>
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Chen">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Michael Chen</h4>
                            <p class="text-gray-600">Marketing Manager</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col">
                    <div class="flex-1">
                        <div class="flex items-center mb-4">
                            <div class="flex items-center">
                                @for ($i = 0; $i < 5; $i++)
                                    <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                        <p class="text-gray-600 italic mb-6">"The community aspect of this platform sets it apart from others. Being able to connect with fellow learners and get feedback from instructors has made my learning journey much more engaging and effective."</p>
                    </div>
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emily Rodriguez">
                        <div class="ml-4">
                            <h4 class="text-lg font-bold text-gray-900">Emily Rodriguez</h4>
                            <p class="text-gray-600">UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>