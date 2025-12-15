<x-layout>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">
                The <span class="text-gradient">Climber's Forum</span>
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Share your experiences, ask for beta, and connect with the community.
            </p>

            @auth
                <div class="mt-8">
                    <a href="{{ route('forum.create') }}"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-white bg-primary-600 hover:bg-primary-700 shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5">
                        <span class="mr-2">➕</span> Start a Discussion
                    </a>
                </div>
            @endauth
        </div>

        @if(session('success'))
            <div class="mb-8 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="grid gap-6">
            @forelse($posts as $post)
                <a href="{{ route('forum.show', $post->id) }}"
                    class="glass p-6 rounded-3xl border border-slate-200/50 hover:border-primary-300 transition-all hover:shadow-md group block">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span
                                    class="text-xs font-bold px-2 py-1 bg-primary-50 text-primary-600 rounded-md">Discussion</span>
                                <span class="text-xs text-slate-400">posted by {{ $post->user->name }} •
                                    {{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            <h2
                                class="text-xl font-bold text-slate-800 group-hover:text-primary-600 transition-colors mb-2">
                                {{ $post->title }}
                            </h2>
                            <p class="text-slate-600 line-clamp-2">
                                {{ Str::limit($post->body, 150) }}
                            </p>

                            @auth
                                @if(auth()->id() === $post->user_id || auth()->user()->is_admin)
                                    <form action="{{ route('forum.destroy', $post->id) }}" method="POST" class="mt-4 inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-400 hover:text-red-600 text-sm font-bold flex items-center gap-1 transition-colors z-20 relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 000-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Delete
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                        <div class="hidden sm:block text-slate-300 group-hover:text-primary-400 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </div>
                </a>
            @empty
                <div class="text-center py-16 bg-white/50 rounded-3xl border border-dashed border-slate-300">
                    <p class="text-slate-500 text-lg">No discussions yet. Be the first to post!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>