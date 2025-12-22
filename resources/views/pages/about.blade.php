<x-layout background="home-bg">
    <div class="max-w-5xl mx-auto px-4 py-12">
        <header class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-white mb-2 drop-shadow-lg">About ClimbConnect</h1>
            <p class="text-lg text-white/80 max-w-2xl mx-auto">
                Your gateway to the local climbing community. Connect, climb, and conquer new heights together.
            </p>
        </header>

        <section class="glass-climbing rounded-2xl p-8 mb-8">
            <h2 class="text-3xl font-bold text-slate-800 mb-4">Our Community</h2>
            <p class="text-slate-700 leading-relaxed text-lg mb-4">
                ClimbConnect is more than just a website; it's a vibrant community of climbers passionate about the
                sport.
                Whether you're a seasoned boulderer, a sport climbing enthusiast, or just starting your journey on the
                wall,
                you'll find a welcoming home here.
            </p>
            <p class="text-slate-700 leading-relaxed text-lg">
                We believe that climbing is best enjoyed together. Our platform is designed to bridge the gap between
                solo sessions
                and lifelong climbing partnerships.
            </p>
        </section>

        <section class="grid md:grid-cols-2 gap-8 mb-8">
            <div class="glass-climbing rounded-2xl p-6 hover:shadow-xl transition duration-300">
                <div class="text-primary-500 text-4xl mb-4">🤝</div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Find Partners</h3>
                <p class="text-slate-600">
                    Struggling to find a belay partner? Our community features make it easy to connect with other
                    climbers
                    at your skill level and in your area. Never miss a session again!
                </p>
            </div>

            <div class="glass-climbing rounded-2xl p-6 hover:shadow-xl transition duration-300">
                <div class="text-primary-500 text-4xl mb-4">🧗‍♂️</div>
                <h3 class="text-xl font-bold text-slate-800 mb-2">Share Beta</h3>
                <p class="text-slate-600">
                    Stuck on a project? Share tips, beta, and encouragement. Our forums and event meetups are the
                    perfect
                    place to learn from others and improve your technique.
                </p>
            </div>
        </section>

        <section class="bg-primary-500 rounded-2xl p-8 text-white text-center shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Ready to Join the Community?</h2>
            <p class="mb-6 text-primary-100">
                Sign up today to start connecting with climbers near you and join our upcoming events.
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('register') }}"
                    class="bg-white text-primary-600 font-bold py-3 px-8 rounded-full hover:bg-primary-50 transition shadow-md">
                    Join Now
                </a>
                <a href="{{ route('contact') }}"
                    class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white hover:text-primary-600 transition">
                    Contact Us
                </a>
            </div>
        </section>
    </div>
</x-layout>