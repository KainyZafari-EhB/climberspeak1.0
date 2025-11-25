<x-admin-layout>
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow-md border-l-4 border-blue-500">
            <h2 class="text-xl font-bold text-gray-700">Total Users</h2>
            <p class="text-4xl font-bold mt-2">{{ \App\Models\User::count() }}</p>
        </div>

        <div class="bg-white p-6 rounded shadow-md border-l-4 border-green-500">
            <h2 class="text-xl font-bold text-gray-700">News Items</h2>
            <p class="text-4xl font-bold mt-2">{{ \App\Models\NewsItem::count() }}</p>
            <a href="{{ route('admin.news.create') }}" class="text-sm text-blue-600 mt-2 block hover:underline">+ Add New</a>
        </div>

        <div class="bg-white p-6 rounded shadow-md border-l-4 border-purple-500">
            <h2 class="text-xl font-bold text-gray-700">Events</h2>
            <p class="text-4xl font-bold mt-2">{{ \App\Models\ClimbingEvent::count() }}</p>
        </div>
    </div>

    <div class="mt-8 bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Quick Actions</h2>
        <div class="flex gap-4">
            <a href="{{ route('admin.news.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Write News</a>
            <a href="{{ route('admin.faq.create') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Add FAQ Question</a>
        </div>
    </div>
</x-admin-layout>
