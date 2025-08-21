<x-layout>
    <x-slot name="header">
        <x-navigation />
    </x-slot>
    
    <!-- Hero Section -->
    <section id="hero">
        <x-hero 
            title="Transform Your Future With Online Learning" 
            subtitle="Anytime, Anywhere" 
            description="Access high-quality courses taught by industry experts. Expand your skills, advance your career, and discover a world of knowledge at your fingertips."
            primaryButtonText="Get Started"
            primaryButtonUrl="#courses"
            secondaryButtonText="Learn More"
            secondaryButtonUrl="#features"
            image="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
            imageAlt="Students learning online"
        />
    </section>
    
    <!-- Stats Section -->
    <section id="stats">
        <x-stats 
            title="Join our global learning community" 
            description="Be part of something bigger - learn with students from around the world"
            stat1Label="Students"
            stat1Value="100K+"
            stat2Label="Courses"
            stat2Value="500+"
            stat3Label="Instructors"
            stat3Value="50+"
        />
    </section>
    
    <!-- Features Section -->
    <section id="features">
        <x-features 
            tagline="Features" 
            title="Why choose EduLearn?" 
            description="Our platform is designed with your learning journey in mind, offering features that enhance your experience and help you achieve your goals."
        />
    </section>
    
    <!-- Categories Section -->
    <section id="categories">
        <x-categories 
            tagline="Explore" 
            title="Browse Course Categories" 
            description="Discover courses in our most popular categories and start learning today."
        />
    </section>
    
    <!-- Popular Courses Section -->
    <section id="courses" class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center mb-12">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Featured</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Popular Courses
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Explore our most popular courses chosen by thousands of students.
                </p>
            </div>
            
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Course 1 -->
                <x-course-card 
                    title="Complete Web Development Bootcamp" 
                    description="Learn HTML, CSS, JavaScript, React, Node.js and more to become a full-stack web developer."
                    category="Development"
                    rating="4.8"
                    reviewCount="1,245"
                    instructorName="John Smith"
                    price="$89.99"
                    image="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80"
                />
                
                <!-- Course 2 -->
                <x-course-card 
                    title="Data Science and Machine Learning" 
                    description="Master data analysis, visualization, and machine learning algorithms with Python."
                    category="Data Science"
                    rating="4.7"
                    reviewCount="987"
                    instructorName="Emily Chen"
                    price="$94.99"
                    image="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80"
                />
                
                <!-- Course 3 -->
                <x-course-card 
                    title="UI/UX Design Masterclass" 
                    description="Learn to create beautiful, user-friendly interfaces that engage and delight users."
                    category="Design"
                    rating="4.9"
                    reviewCount="756"
                    instructorName="Alex Johnson"
                    price="$79.99"
                    image="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80"
                />
            </div>
            
            <div class="mt-12 text-center">
                <a href="#all-courses" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                    View All Courses
                    <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials">
        <x-testimonials 
            tagline="Testimonials" 
            title="What Our Students Say" 
            description="Hear from our students about how our platform has helped them achieve their learning goals and advance their careers."
        />
    </section>
    
    <!-- CTA Section -->
    <section id="cta">
        <x-cta 
            title="Ready to start learning?" 
            subtitle="Join thousands of students today." 
            primaryButtonText="Get started" 
            primaryButtonUrl="#register" 
            secondaryButtonText="Browse courses" 
            secondaryButtonUrl="#courses"
        />
    </section>
    
    <x-slot name="footer">
        <x-footer />
    </x-slot>
</x-layout>
