<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - ClimbConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans flex min-h-screen">

    <aside class="w-64 bg-gray-900 text-white flex flex-col">
        <div class="p-6 text-2xl font-bold bg-gray-800 text-center">
            Admin Panel
        </div>

        <nav class="flex-grow p-4 space-y-2">
            <a href="{{ route('dashboard') }}"
                class="block py-2 px-4 rounded {{ request()->routeIs('dashboard') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">Dashboard</a>

            <div class="pt-4 pb-2 text-xs text-gray-400 uppercase font-bold">Content</div>
            <a href="{{ route('admin.news.index') }}"
                class="block py-2 px-4 rounded {{ request()->routeIs('admin.news.index') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">Manage
                News</a>
            <a href="{{ route('admin.news.create') }}"
                class="block py-1 px-4 text-sm text-gray-400 hover:text-white pl-8 hover:bg-gray-800 rounded">
                + Add Article
            </a>
            <a href="{{ route('admin.events.index') }}"
                class="block py-2 px-4 rounded {{ request()->routeIs('admin.events.index') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">Manage
                Events</a>
            <a href="{{ route('admin.events.create') }}"
                class="block py-1 px-4 text-sm text-gray-400 hover:text-white pl-8 hover:bg-gray-800 rounded">
                + Add Event
            </a>
            <a href="{{ route('admin.faq.index') }}"
                class="block py-2 px-4 rounded {{ request()->routeIs('admin.faq.index') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">Manage
                FAQ</a>
            <a href="{{ route('admin.faq.create') }}"
                class="block py-1 px-4 text-sm text-gray-400 hover:text-white pl-8 hover:bg-gray-800 rounded">
                + Add Question
            </a>

            <div class="pt-4 pb-2 text-xs text-gray-400 uppercase font-bold">System</div>
            <a href="{{ route('home') }}" class="block py-2 px-4 rounded bg-gray-700 hover:bg-gray-600 text-white mt-2">
                &larr; Back to Home
            </a>
        </nav>

        <div class="p-4 bg-gray-800">
            <div class="text-sm text-gray-400">Logged in as:</div>
            {{-- safe access: optional() prevents exception if no user --}}
            <div class="font-bold">{{ optional(auth()->user())->name ?? 'Guest' }}</div>
        </div>
    </aside>

    <main class="flex-grow p-8">
        {{-- Flash Messages --}}
        @if(session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('status') }}
            </div>
        @endif

        {{ $slot }}
    </main>

</body>

</html>