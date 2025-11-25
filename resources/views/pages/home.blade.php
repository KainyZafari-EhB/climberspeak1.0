<x-layout>
    <div class="text-center py-20 bg-blue-500 text-white rounded-lg shadow-xl mb-8">
        <h1 class="text-5xl font-bold mb-4">Welcome to ClimbConnect</h1>
        <p class="text-xl mb-8">Find partners, join events, and explore the climbing world.</p>
        <a href="{{ route('events.index') }}" class="bg-white text-blue-600 font-bold py-3 px-6 rounded-full hover:bg-gray-100 transition">
            Find an Event
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-bold text-xl mb-2">Community</h3>
            <p>Connect with climbers in your area.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-bold text-xl mb-2">Events</h3>
            <p>Join local climbing sessions and meetups.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-bold text-xl mb-2">News</h3>
            <p>Stay updated with the latest climbing news.</p>
        </div>
    </div>
</x-layout>
