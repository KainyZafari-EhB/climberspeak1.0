<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">
            Search Results for "{{ $query }}"
        </h2>

        @if($users->isEmpty())
            <p class="text-gray-600 text-lg">No users found matching your search.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($users as $user)
                    <div class="bg-white overflow-hidden shadow rounded-lg flex items-center p-6 space-x-4">
                        <div class="flex-shrink-0">
                            @if($user->profile_photo_path)
                                <img class="h-16 w-16 rounded-full object-cover" src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}">
                            @else
                                <div class="h-16 w-16 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-xl font-bold">
                                    {{ substr($user->name, 0, 1) }}
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <a href="{{ route('profile.show', $user) }}" class="text-lg font-medium text-gray-900 hover:text-blue-600 truncate block">
                                {{ $user->name }}
                            </a>
                            @if($user->username)
                                <p class="text-sm text-gray-500 truncate">{{ '@' . $user->username }}</p>
                            @endif
                            <p class="text-sm text-gray-400 mt-1">Joined {{ $user->created_at?->format('F Y') ?? 'Unknown' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
