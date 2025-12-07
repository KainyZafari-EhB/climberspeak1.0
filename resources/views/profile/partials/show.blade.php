<x-layout>
    <div class="max-w-4xl mx-auto">
        @php $user = $user ?? auth()->user(); @endphp

        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-blue-600 h-32"></div>
            <div class="px-6 py-4 -mt-16 relative">
                <div class="flex items-end justify-between">
                    <div class="flex items-end">
                        @if(!empty($user->profile_photo_url))
                            <img src="{{ $user->profile_photo_url }}" alt="Profile photo"
                                class="h-32 w-32 rounded-full border-4 border-white object-cover bg-white">
                        @elseif(!empty($user->avatar))
                            <img src="{{ $user->avatar }}" alt="Avatar"
                                class="h-32 w-32 rounded-full border-4 border-white object-cover bg-white">
                        @else
                            <div
                                class="h-32 w-32 rounded-full border-4 border-white bg-gray-200 flex items-center justify-center text-4xl font-bold text-gray-700">
                                {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                            </div>
                        @endif

                        <div class="ml-4 mb-2">
                            <h2 class="text-3xl font-bold text-gray-900">{{ $user->name ?? 'No name' }}</h2>
                            @if(!empty($user->username))
                                <p class="text-gray-600">{{ '@' . $user->username }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="mb-4">
                        @if(\Illuminate\Support\Facades\Route::has('profile.edit'))
                            <a href="{{ route('profile.edit') }}"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Edit Profile
                            </a>
                        @else
                            <a href="{{ url('/profile/edit') }}"
                                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Edit Profile
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="px-6 py-6 border-t border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <div class="text-sm font-medium text-gray-500">Email</div>
                        <div class="mt-1 text-lg text-gray-900">{{ $user->email ?? 'No email' }}</div>
                    </div>

                    <div>
                        <div class="text-sm font-medium text-gray-500">Registered</div>
                        <div class="mt-1 text-lg text-gray-900">
                            {{ optional($user->created_at)->format('F j, Y') ?? 'N/A' }}</div>
                    </div>

                    <div>
                        <div class="text-sm font-medium text-gray-500">Role</div>
                        <div class="mt-1 text-lg text-gray-900 capitalize">{{ $user->role ?? 'User' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>