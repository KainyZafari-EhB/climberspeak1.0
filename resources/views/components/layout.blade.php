<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClimbConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans flex flex-col min-h-screen">

<nav class="bg-blue-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold flex items-center gap-2">
            🧗 ClimbConnect
        </a>

        <div class="space-x-4 hidden md:flex">
            <a href="{{ route('news.index') }}" class="hover:text-blue-200">News</a>
            <a href="{{ route('events.index') }}" class="hover:text-blue-200">Events</a>
            <a href="{{ route('faq.index') }}" class="hover:text-blue-200">FAQ</a>
            <a href="{{ route('contact') }}" class="hover:text-blue-200">Contact</a>
        </div>

        <div class="space-x-4">
            @auth
                <a href="{{ route('profile.show') }}" class="font-semibold">{{ auth()->user()->username }}</a>

                @if(auth()->user()->is_admin)
                    <a href="{{ route('admin.dashboard') }}" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm">Admin Panel</a>
                @endif

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-blue-200 text-sm">(Logout)</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:text-blue-200">Login</a>
                <a href="{{ route('register') }}" class="bg-white text-blue-600 px-4 py-2 rounded hover:bg-gray-100">Join Now</a>
            @endauth
        </div>
    </div>
</nav>

<main class="flex-grow container mx-auto px-4 py-8">
    {{-- Flash Messages --}}
    @if(session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}
</main>

<footer class="bg-gray-800 text-white text-center py-4 mt-8">
    <p>&copy; {{ date('Y') }} ClimbConnect - Student Project</p>
</footer>

</body>
</html>
