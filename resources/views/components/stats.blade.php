<div class="bg-indigo-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                {{ $title ?? 'Trusted by learners and professionals worldwide' }}
            </h2>
            <p class="mt-3 text-xl text-indigo-200 sm:mt-4">
                {{ $description ?? 'Join our growing community of students and instructors making a difference through education.' }}
            </p>
        </div>
        <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
            <div class="flex flex-col">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
                    {{ $stat1Label ?? 'Students' }}
                </dt>
                <dd class="order-1 text-5xl font-extrabold text-white">
                    {{ $stat1Value ?? '100K+' }}
                </dd>
            </div>
            <div class="flex flex-col mt-10 sm:mt-0">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
                    {{ $stat2Label ?? 'Courses' }}
                </dt>
                <dd class="order-1 text-5xl font-extrabold text-white">
                    {{ $stat2Value ?? '500+' }}
                </dd>
            </div>
            <div class="flex flex-col mt-10 sm:mt-0">
                <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
                    {{ $stat3Label ?? 'Instructors' }}
                </dt>
                <dd class="order-1 text-5xl font-extrabold text-white">
                    {{ $stat3Value ?? '50+' }}
                </dd>
            </div>
        </dl>
    </div>
</div>