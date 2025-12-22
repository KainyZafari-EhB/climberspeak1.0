<x-layout background="home-bg">
    <!-- Hero Section -->
    <div class="relative z-10 text-center py-20 lg:py-32">
        <div class="inline-block animate-float mb-6">
            <span
                class="bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold border border-white/30 shadow-sm backdrop-blur-sm">
                🚀 The #1 Community for Climbers
            </span>
        </div>

        <h1 class="text-5xl lg:text-7xl font-extrabold mb-8 tracking-tight text-white drop-shadow-lg">
            Reach New <span class="text-primary-400">Heights</span><br>
            Together.
        </h1>

        <p class="text-lg lg:text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed drop-shadow">
            Connect with local climbers, discover events, and share your passion.
            Your next climbing partner is just a click away.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('events.index') }}"
                class="bg-primary-500 text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-primary-600 transition-all hover:shadow-xl hover:shadow-primary-600/30 hover:-translate-y-1">
                Find an Event
            </a>
            <a href="{{ route('about') }}"
                class="bg-white/20 text-white px-8 py-4 rounded-full font-bold text-lg border border-white/30 hover:bg-white/30 transition-all hover:-translate-y-1 backdrop-blur-sm">
                Learn More
            </a>
        </div>
    </div>

    <!-- Feature Cards -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-12 relative z-10 w-full">
        <a href="{{ route('about') }}"
            class="group glass-climbing p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl block">
            <div
                class="bg-primary-100 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                🤝
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">Community
            </h3>
            <p class="text-slate-600 leading-relaxed">Connect with climbers in your area.</p>
        </a>

        <a href="{{ route('forum.index') }}"
            class="group glass-climbing p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl block">
            <div
                class="bg-orange-100 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                💬
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">Forum
            </h3>
            <p class="text-slate-600 leading-relaxed">Share tips, ask questions, and discuss beta.</p>
        </a>

        <a href="{{ route('events.index') }}"
            class="group glass-climbing p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl block">
            <div
                class="bg-amber-100 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                🗓️
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">Events
            </h3>
            <p class="text-slate-600 leading-relaxed">Join local climbing sessions.</p>
        </a>

        <a href="{{ route('news.index') }}"
            class="group glass-climbing p-8 rounded-3xl transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl block">
            <div
                class="bg-primary-100 w-14 h-14 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform duration-300">
                📰
            </div>
            <h3 class="font-bold text-2xl mb-3 text-slate-900 group-hover:text-primary-600 transition-colors">News</h3>
            <p class="text-slate-600 leading-relaxed">Stay updated with the latest news.</p>
        </a>
    </div>
</x-layout>