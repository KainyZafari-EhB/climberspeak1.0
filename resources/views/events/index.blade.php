<x-layout background="events-bg">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-white drop-shadow-lg">Upcoming Climbing Events</h1>
        @auth
            <a href="{{ route('events.create') }}"
                class="bg-primary-500 text-white px-4 py-2 rounded-full hover:bg-primary-600 font-semibold shadow-lg">+
                Create Event</a>
        @endauth
    </div>

    <div class="space-y-4">
        @foreach($events as $event)
            <div class="glass-climbing p-6 rounded-2xl flex justify-between items-center hover:shadow-2xl transition">
                <div>
                    <div class="flex items-center gap-3">
                        <h2 class="text-xl font-bold">
                            <a href="{{ route('events.show', $event) }}" class="hover:text-primary-500 transition">
                                {{ $event->title }}
                            </a>
                        </h2>
                        @auth
                            @if($event->users->contains(auth()->user()))
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-semibold">
                                    ✅ Joined
                                </span>
                            @endif
                        @endauth
                    </div>
                    <p class="text-slate-600"><span class="font-semibold">Location:</span> {{ $event->location }}</p>
                    <p class="text-slate-600"><span class="font-semibold">Date:</span>
                        {{ $event->date->format('l, F j, Y \a\t H:i') }}</p>
                    <p class="mt-2 text-slate-700 line-clamp-2">{{ $event->description }}</p>

                    <div class="mt-2 text-sm text-primary-500">
                        <a href="{{ route('events.show', $event) }}" class="hover:underline">
                            {{ $event->users->count() }} climbers attending
                        </a>
                    </div>
                </div>

                <div>
                    @auth
                        <form action="{{ route('events.join', $event) }}" method="POST">
                            @csrf
                            {{-- Check if the current user is in the event's user list --}}
                            @if($event->users->contains(auth()->user()))
                                <button type="submit"
                                    class="bg-red-100 text-red-600 border border-red-600 px-4 py-2 rounded-lg hover:bg-red-200 transition">
                                    Leave
                                </button>
                            @else
                                <button type="submit"
                                    class="bg-primary-500 text-white px-4 py-2 rounded-lg hover:bg-primary-600 transition">
                                    Join
                                </button>
                            @endif
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-slate-500 italic text-sm">Login to join</a>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
</x-layout>