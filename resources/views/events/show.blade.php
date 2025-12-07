<x-layout>
    <div class="max-w-4xl mx-auto py-8">
        <div class="mb-6">
            <a href="{{ route('events.index') }}" class="text-blue-600 hover:underline">&larr; Back to Events</a>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <div class="flex justify-between items-start">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $event->title }}</h1>
                        <div class="flex items-center text-gray-600 mb-4">
                            <span class="mr-4">📅 {{ $event->date->format('l, F j, Y') }}</span>
                            <span class="mr-4">⏰ {{ $event->date->format('H:i') }}</span>
                            <span>📍 {{ $event->location }}</span>
                        </div>
                    </div>
                    @auth
                        @if($event->users->contains(auth()->user()))
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                ✅ Joined
                            </span>
                        @endif
                    @endauth
                </div>

                <div class="prose max-w-none text-gray-700 mb-8">
                    {{ $event->description }}
                </div>

                <div class="border-t pt-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold text-gray-900">
                            Climbers Attending ({{ $event->users->count() }})
                        </h2>
                        @auth
                            <form action="{{ route('events.join', $event) }}" method="POST">
                                @csrf
                                @if($event->users->contains(auth()->user()))
                                    <button type="submit" class="bg-red-100 text-red-600 border border-red-600 px-4 py-2 rounded hover:bg-red-200 transition">
                                        Leave Event
                                    </button>
                                @else
                                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition shadow">
                                        Join Event
                                    </button>
                                @endif
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login to join</a>
                        @endauth
                    </div>

                    @if($event->users->count() > 0)
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                            @foreach($event->users as $user)
                                <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                    @if(!empty($user->profile_photo_url))
                                        <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="w-10 h-10 rounded-full object-cover">
                                    @elseif(!empty($user->avatar))
                                        <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="w-10 h-10 rounded-full object-cover">
                                    @else
                                        <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">
                                            {{ strtoupper(substr($user->name, 0, 1)) }}
                                        </div>
                                    @endif
                                    <span class="font-medium text-gray-700 truncate">{{ $user->name }}</span>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 italic">No climbers have joined yet. Be the first!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
