<x-layout background="home-bg">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white drop-shadow-lg mb-8">
            Search Results for "{{ $query }}"
        </h2>

        @if($users->isEmpty())
            <p class="text-white/80 text-lg">No users found matching your search.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($users as $user)
                    <div class="glass-climbing overflow-hidden rounded-xl flex items-center p-6 space-x-4">
                        <div class="flex-shrink-0">
                            @if($user->profile_photo)
                                <img class="h-16 w-16 rounded-full object-cover" src="{{ $user->profile_photo }}" alt="{{ $user->name }}">
                            @else
                                <div class="h-16 w-16 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 text-xl font-bold">
                                    {{ substr($user->name, 0, 1) }}
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <a href="{{ route('profile.show', $user) }}" class="text-lg font-medium text-slate-900 hover:text-primary-500 truncate block">
                                {{ $user->name }}
                            </a>
                            @if($user->username)
                                <p class="text-sm text-slate-500 truncate">{{ '@' . $user->username }}</p>
                            @endif
                            <p class="text-sm text-slate-400 mt-1">Joined {{ $user->created_at?->format('F Y') ?? 'Unknown' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
