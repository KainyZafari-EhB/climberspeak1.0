<x-layout>
    <div class="max-w-4xl mx-auto py-8 text-black">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden text-black">
            <!-- Banner -->
            <div class="bg-blue-600 h-32"></div>

            <div class="px-6 py-4 -mt-16 relative text-black">
                <div class="flex items-end justify-between">
                    <div class="flex items-end">
                        <!-- Profile Photo -->
                        <div class="flex-shrink-0 border-4 border-white rounded-full bg-white">
                            @if($user->profile_photo_path)
                                <img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}"
                                    class="h-32 w-32 rounded-full object-cover">
                            @else
                                <div
                                    class="h-32 w-32 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-4xl font-bold">
                                    {{ substr($user->name, 0, 1) }}
                                </div>
                            @endif
                        </div>

                        <!-- Name and Username -->
                        <div class="ml-4 mb-2">
                            <h2 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h2>
                            @if($user->username)
                                <p class="text-gray-600 font-medium">{{ '@' . $user->username }}</p>
                            @endif
                        </div>
                    </div>

                    <!-- Edit Profile Button -->
                    <div class="mb-4">
                        @auth
                            @if(auth()->id() === $user->id)
                                <a href="{{ route('profile.edit') }}"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Edit Profile
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>

            <!-- Profile Details -->
            <div class="px-6 py-6 border-t border-gray-200">
                <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-6">

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Email</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $user->email }}</dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Member Since</dt>
                        <dd class="mt-1 text-sm text-gray-900">{{ $user->created_at?->format('F j, Y') ?? 'N/A' }}</dd>
                    </div>

                    @if($user->birthday)
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">Birthday</dt>
                            <dd class="mt-1 text-sm text-gray-900">{{ $user->birthday->format('F d, Y') }}</dd>
                        </div>
                    @endif

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Role</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            @if($user->is_admin)
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Admin</span>
                            @else
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">User</span>
                            @endif
                        </dd>
                    </div>

                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">About Me</dt>
                        <dd class="mt-1 text-sm text-gray-900 whitespace-pre-line">
                            @if($user->about_me)
                                {{ $user->about_me }}
                            @else
                                <span class="italic text-gray-400">No bio provided.</span>
                            @endif
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-layout>