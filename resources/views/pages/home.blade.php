<x-layout>
    <!-- Hero Section -->
    <div class="relative z-10 text-center py-20 lg:py-32">
        <div class="inline-block animate-float mb-6">
            <span
                class="bg-primary-50 text-primary-600 px-4 py-2 rounded-full text-sm font-semibold border border-primary-100 shadow-sm">
                🚀 The #1 Community for Climbers
            </span>
        </div>

        <h1 class="text-5xl lg:text-7xl font-extrabold mb-8 tracking-tight text-slate-900">
            Reach New <span class="text-gradient">Heights</span><br>
            Together.
        </h1>

        <p class="text-lg lg:text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">
            Connect with local climbers, discover events, and share your passion.
            Your next climbing partner is just a click away.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('events.index') }}"
                class="bg-primary-600 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-primary-700 transition-all hover:shadow-xl hover:shadow-primary-600/20 hover:-translate-y-1">
                Find an Event
            </a>
            <a href="{{ route('about') }}"
                class="bg-white text-slate-700 px-8 py-4 rounded-full font-bold text-lg border border-slate-200 hover:bg-slate-50 transition-all hover:-translate-y-1 hover:border-slate-300">
                Learn More
            </a>
        </div>
    </div>

    <!-- Feature Cards -->
    <div class="grid md:grid-cols-3 gap-8 mt-12 relative z-10">
        <a href="{{ route('about') }}"
            class="group glass p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary-900/5 block border border-slate-100/50">
            <div
                class="bg-primary-50 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                🤝
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">Community
            </h3>
            <p class="text-slate-500 leading-relaxed">Connect with climbers in your area. find partners for your next
                session.</p>
        </a>

        <a href="{{ route('events.index') }}"
            class="group glass p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary-900/5 block border border-slate-100/50">
            <div
                class="bg-violet-50 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                🗓️
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">Events
            </h3>
            <p class="text-slate-500 leading-relaxed">Join local climbing sessions, competitions, and casual meetups.
            </p>
        </a>

        <a href="{{ route('news.index') }}"
            class="group glass p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-primary-900/5 block border border-slate-100/50">
            <div
                class="bg-indigo-50 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                📰
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">News</h3>
            <p class="text-slate-500 leading-relaxed">Stay updated with the latest climbing news, tips, and community
                stories.</p>
        </a>
    </div>
</x-layout>