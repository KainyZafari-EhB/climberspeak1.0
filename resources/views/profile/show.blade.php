<x-layout>
    <div class="max-w-5xl mx-auto py-12 relative z-10">
        <!-- Banner (V1 Style) -->
        <div class="relative h-56 rounded-t-3xl overflow-hidden shadow-lg border-b border-white/20 mx-4 sm:mx-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-violet-600"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20">
            </div>

            <!-- Optional: Floating Pattern/Shape for "Cool" factor -->
            <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-white/10 rounded-full blur-2xl"></div>
        </div>

        <!-- Main Glass Card (V1 Structure) -->
        <div class="glass rounded-b-3xl -mt-12 px-6 sm:px-10 pb-10 pt-0 shadow-2xl mx-4 sm:mx-0 relative border-t-0">

            <!-- Header Row (V2 Cleanliness) -->
            <div class="flex flex-col md:flex-row items-end -mt-16 mb-8 gap-6">
                <!-- Avatar -->
                <div class="relative group">
                    <div
                        class="w-32 h-32 md:w-40 md:h-40 rounded-full border-[6px] border-white/80 shadow-2xl overflow-hidden bg-white">
                        @if($user->profile_photo_path)
                            <img src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}"
                                class="w-full h-full object-cover">
                        @else
                            <div
                                class="w-full h-full flex items-center justify-center bg-primary-50 text-primary-500 text-5xl font-bold">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                        @endif
                    </div>
                    @auth
                        @if(auth()->id() === $user->id)
                            <a href="{{ route('profile.edit') }}"
                                class="absolute bottom-2 right-2 bg-white rounded-full p-2.5 shadow-md text-slate-700 hover:text-primary-600 transition-colors cursor-pointer border border-slate-100"
                                title="Change Photo">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </a>
                        @endif
                    @endauth
                </div>

                <!-- Identity -->
                <div class="flex-1 text-center md:text-left mb-2">
                    <h1 class="text-4xl font-extrabold text-slate-800 tracking-tight">{{ $user->name }}</h1>
                    @if($user->username)
                        <p class="text-lg font-medium text-primary-600">@ {{ $user->username }}</p>
                    @endif
                </div>

                <!-- Actions -->
                <div class="mb-4">
                    @auth
                        @if(auth()->id() === $user->id)
                            <a href="{{ route('profile.edit') }}"
                                class="inline-flex items-center px-6 py-3 bg-slate-900 border border-transparent rounded-full font-bold text-sm text-white uppercase tracking-wider hover:bg-primary-600 hover:shadow-lg hover:-translate-y-0.5 transition-all">
                                Edit Profile
                            </a>
                        @endif
                    @endauth
                </div>
            </div>

            <!-- Divider -->
            <div class="h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent mb-8"></div>

            <!-- Content Grid (V2 Organization) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Left Sidebar: Info & Stats -->
                <div class="space-y-6">
                    <div class="bg-primary-50/40 p-5 rounded-2xl border border-primary-100">
                        <h3 class="text-xs font-bold text-primary-500 uppercase tracking-wide mb-3">Community Status
                        </h3>
                        @if($user->is_admin)
                            <span
                                class="w-full justify-center flex items-center px-4 py-2 rounded-xl text-sm font-bold bg-red-100 text-red-700 border border-red-200">
                                🛡️ Admin
                            </span>
                        @else
                            <span
                                class="w-full justify-center flex items-center px-4 py-2 rounded-xl text-sm font-bold bg-blue-100 text-blue-700 border border-blue-200">
                                🧗 Climber
                            </span>
                        @endif
                    </div>

                    <div class="bg-white/60 p-5 rounded-2xl border border-slate-100 shadow-sm">
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wide mb-4">Details</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-slate-500">Joined</span>
                                <span
                                    class="font-semibold text-slate-700">{{ $user->created_at?->format('M Y') ?? 'N/A' }}</span>
                            </div>
                            @if($user->birthday)
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-slate-500">Birthday</span>
                                    <span class="font-semibold text-slate-700">{{ $user->birthday->format('F d') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Main: Bio & Activity -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Bio Section -->
                    <div class="bg-white/40 p-6 sm:p-8 rounded-3xl border border-white/60 shadow-inner">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="p-2 bg-primary-100 text-primary-600 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800">About Me</h3>
                        </div>

                        <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed font-medium">
                            @if($user->about_me)
                                {{ $user->about_me }}
                            @else
                                <p class="text-slate-400 italic text-center py-4">No bio provided yet.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Placeholder for future tabs (Events, etc) -->
                    <div class="flex gap-4 border-b border-slate-200/60 pb-1">
                        <button
                            class="px-4 py-2 text-primary-600 font-bold border-b-2 border-primary-600">Events</button>
                        <button
                            class="px-4 py-2 text-slate-400 font-medium hover:text-slate-600 transition-colors">Photos</button>
                    </div>
                    <div
                        class="text-center py-8 text-slate-400 bg-slate-50/50 rounded-2xl border border-slate-100 border-dashed">
                        No recent activity to show.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>