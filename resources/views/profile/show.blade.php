<x-layout>
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 flex items-center">
                <div class="flex-shrink-0 mr-4">
                    @if($user->profile_photo_path)
                        <img class="h-20 w-20 rounded-full object-cover" src="{{ $user->profile_photo_path }}"
                            alt="{{ $user->name }}">
                    @else
                        <div
                            class="h-20 w-20 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-2xl font-bold">
                            {{ substr($user->name, 0, 1) }}
                        </div>
                    @endif
                </div>
                <div>
                    <h3 class="text-2xl leading-6 font-medium text-gray-900">
                        {{ $user->username ? '@' . $user->username : $user->name }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Member since {{ $user->created_at->format('M Y') }}
                    </p>
                </div>
            </div>

            <div class="border-t border-gray-200">
                <dl>
                    @if($user->username)
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Full Name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->name }}
                            </dd>
                        </div>
                    @endif

                    @if($user->birthday)
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Birthday
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->birthday->format('F d, Y') }}
                            </dd>
                        </div>
                    @endif

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            About
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
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

        <div class="mt-6 text-center">
            @auth
                @if(auth()->id() === $user->id)
                    <a href="{{ route('profile.edit') }}" class="text-indigo-600 hover:text-indigo-900 font-bold">Edit My
                        Profile</a>
                @endif
            @endauth
        </div>
    </div>
</x-layout>