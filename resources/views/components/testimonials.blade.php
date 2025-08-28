<div class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-1.5 text-sm font-semibold tracking-wider text-indigo-600 uppercase bg-indigo-100 rounded-full">{{ $tagline ?? 'Testimonials' }}</span>
            <h2 class="mt-6 text-4xl font-bold text-gray-900 sm:text-5xl">
                {{ $title ?? 'What Our Students Say' }}
            </h2>
            <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                {{ $description ?? 'Hear from our students about how our platform has helped them achieve their learning goals and advance their careers.' }}
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Testimonial 1 -->
            <div class="group bg-white rounded-2xl p-8 flex flex-col transform transition-all duration-300 hover:-translate-y-1 border border-gray-100 hover:border-indigo-100">
                <div class="flex-1">
                    <div class="flex mb-6">
                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 极 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="relative">
                        <svg class="absolute -top-6 -left-2 w-16 h-16 text-indigo-50 opacity-70" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21v-7.391c0-5.704 3.极31-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10极-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <p class="text-gray-600 text-lg relative z-10">"The courses on this platform have been instrumental in helping me transition into a new career in web development. The instructors are knowledgeable and the content is up-to-date with industry standards."</p>
                    </div>
                </div>
                <div class="flex items-center mt-8 pt-6 border-t border-gray-100">
                    <div class="relative">
                        <img class="h-14 w-14 rounded-full object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sarah Johnson">
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-indigo-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">Sarah Johnson</h4>
                        <p class="text-gray-600">Web Developer</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group bg-white rounded-2xl p-8 flex flex-col transform transition-all duration-300 hover:-translate-y-1 border border-gray-100 hover:border-indigo-100">
                <div class="flex-1">
                    <div class="flex mb-6">
                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 17.27L极18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="relative">
                        <svg class="absolute -top-6 -left-2 w-16 h-16 text-indigo-50 opacity-70" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <p class="text-gray-600 text-lg relative z-10">"As a busy professional, I appreciate the flexibility this platform offers. I can learn at my own pace and the mobile app makes it easy to continue my studies even when I'm on the go."</p>
                    </div>
                </div>
                <div class="flex items-center mt-8 pt-6 border-t border-gray-100">
                    <div class="relative">
                        <img class="h-14 w-14 rounded-full object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib极=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Chen">
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-indigo-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">Michael Chen</h4>
                        <p class="text-gray-600">Marketing Manager</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group bg-white rounded-2xl p-8 flex flex-col transform transition-all duration-300 hover:-translate-y-1 border border-gray-100 hover:border-indigo-100">
                <div class="flex-1">
                    <div class="flex mb-6">
                        <div class="flex items-center">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="relative">
                        <svg class="absolute -top-6 -left-2 w-16 h-16 text-indigo-50 opacity-70" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0极v-7.391c0-5.704 3.748-9.57 9-极10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <p class="text-gray-600 text-lg relative z-10">"The community aspect of this platform sets it apart from others. Being able to connect with fellow learners and get feedback from instructors has made my learning journey much more engaging and effective."</p>
                    </div>
                </div>
                <div class="flex items-center mt-8 pt-6 border-t border-gray-100">
                    <div class="relative">
                        <img class="h-14 w-14 rounded-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Emily Rodriguez">
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-indigo-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-lg font-bold text-gray-900">Emily Rodriguez</h4>
                        <p class="text-gray-600">UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
