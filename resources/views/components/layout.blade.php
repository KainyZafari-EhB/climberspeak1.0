<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClimbConnect</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-slate-50 text-slate-900 font-sans flex flex-col min-h-screen antialiased selection:bg-primary-500 selection:text-white relative">

    <!-- Background Decor -->
    <div
        class="fixed inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-primary-100/50 via-slate-50 to-slate-50 pointer-events-none">
    </div>

    <nav class="fixed w-full z-[100] transition-all duration-300 glass border-b border-slate-200/50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}"
                class="text-2xl font-bold flex items-center gap-2 tracking-tight hover:scale-105 transition-transform">
                <span class="text-3xl">🧗</span> <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-violet-600">ClimbConnect</span>
            </a>

            <div class="space-x-8 hidden md:flex font-medium text-slate-600">
                <a href="{{ route('news.index') }}" class="hover:text-primary-600 transition-colors">News</a>
                <a href="{{ route('forum.index') }}" class="hover:text-primary-600 transition-colors">Forum</a>
                <a href="{{ route('events.index') }}" class="hover:text-primary-600 transition-colors">Events</a>
                <a href="{{ route('faq.index') }}" class="hover:text-primary-600 transition-colors">FAQ</a>
                <a href="{{ route('contact') }}" class="hover:text-primary-600 transition-colors">Contact</a>
            </div>

            <div class="flex items-center space-x-6">
                <form action="{{ route('search') }}" method="GET" class="hidden md:flex items-center group relative">
                    <input type="text" name="query" placeholder="Search..."
                        class="pl-4 pr-10 py-2 rounded-full border border-slate-200 bg-slate-100/50 focus:bg-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all w-48 group-focus-within:w-64 text-sm">
                    <button type="submit"
                        class="absolute right-3 text-slate-400 hover:text-primary-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>

                @auth
                    <div class="flex items-center gap-4">
                        <a href="{{ route('profile.show', auth()->user()) }}"
                            class="font-semibold text-slate-700 hover:text-primary-600 transition-colors">{{ auth()->user()->username ?? auth()->user()->name }}</a>

                        @if(auth()->user()->is_admin)
                            <a href="{{ route('admin.dashboard') }}"
                                class="bg-red-500/10 text-red-600 hover:bg-red-500 hover:text-white px-3 py-1 rounded-full text-xs font-bold transition-all border border-red-500/20">Dashboard</a>
                        @endif

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                class="text-sm font-medium text-slate-500 hover:text-red-500 transition-colors">(Logout)</button>
                        </form>
                    </div>
                @else
                    <div class="flex items-center gap-4">
                        <a href="{{ route('login') }}"
                            class="font-medium text-slate-600 hover:text-primary-600 transition-colors">Login</a>
                        <a href="{{ route('register') }}"
                            class="bg-primary-600 text-white px-5 py-2.5 rounded-full hover:bg-primary-700 hover:shadow-lg hover:shadow-primary-600/30 transition-all font-medium text-sm transform hover:-translate-y-0.5">Join
                            Now</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-6 py-8 pt-32 animate-fade-in-up">
        {{-- Flash Messages --}}
        @if(session('status'))
            <div
                class="bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-8 shadow-sm flex items-center gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                {{ session('status') }}
            </div>
        @endif

        {{ $slot }}
    </main>

    <footer class="bg-slate-900 text-slate-400 py-12 mt-20 border-t border-slate-800">
        <div class="container mx-auto px-6 text-center">
            <h4 class="text-white font-bold text-xl mb-4">🧗 ClimbConnect</h4>
            <p class="mb-8 max-w-md mx-auto text-slate-500">Connecting climbers worldwide. Join the community and reach
                new heights together.</p>
            <div class="flex justify-center gap-6 mb-8">
                <a href="#" class="hover:text-white transition-colors">Instagram</a>
                <a href="#" class="hover:text-white transition-colors">Twitter</a>
                <a href="#" class="hover:text-white transition-colors">Facebook</a>
            </div>
            <p class="text-sm border-t border-slate-800 pt-8">&copy; {{ date('Y') }} ClimbConnect - Built with ❤️ for
                climbers.</p>
        </div>
    </footer>

</body>

</html>