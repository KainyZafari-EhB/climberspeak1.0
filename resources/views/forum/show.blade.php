<x-layout background="forum-bg">
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-6">
            <a href="{{ route('forum.index') }}"
                class="text-slate-500 hover:text-primary-600 font-medium inline-flex items-center gap-1 transition-colors">
                &larr; Back to Forum
            </a>
        </div>

        <article class="glass p-8 md:p-10 rounded-3xl shadow-xl border border-white/60 relative overflow-hidden">
            <!-- Header -->
            <header class="mb-8 border-b border-slate-100 pb-8">
                <div class="flex items-center gap-3 mb-4">
                    <span
                        class="text-xs font-bold px-3 py-1 bg-primary-100 text-primary-700 rounded-full">Discussion</span>
                    <span class="text-sm text-slate-500">{{ $post->created_at->format('F j, Y') }}</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4 leading-tight">{{ $post->title }}
                </h1>
                <div class="flex items-center gap-3">
                    <div
                        class="h-10 w-10 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 font-bold border border-white shadow-sm">
                        {{ substr($post->user->name, 0, 1) }}
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-800">{{ $post->user->name }}</p>
                        @if($post->user->is_admin)
                            <p class="text-xs text-red-600 font-bold">Admin</p>
                        @else
                            <p class="text-xs text-slate-500">Climber</p>
                        @endif
                    </div>

                    @auth
                        @if(auth()->id() === $post->user_id || auth()->user()->is_admin)
                            <form action="{{ route('forum.destroy', $post->id) }}" method="POST" class="ml-auto md:ml-4"
                                onsubmit="return confirm('Delete this discussion?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-slate-400 hover:text-red-500 transition-colors p-2 rounded-full hover:bg-red-50"
                                    title="Delete Post">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 000-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        @endif
                    @endauth
                </div>
            </header>

            <!-- Body -->
            <div class="prose prose-slate prose-lg max-w-none text-slate-700 leading-relaxed">
                {!! nl2br(e($post->body)) !!}
            </div>

            <!-- Footer / Comments -->
            <div class="mt-12 pt-8 border-t border-slate-100">
                <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-2">
                    <span>💬</span> Comments <span
                        class="text-slate-400 text-sm font-normal">({{ $post->comments->count() }})</span>
                </h3>

                <!-- Comment List -->
                <div class="space-y-6 mb-10">
                    @forelse($post->comments as $comment)
                        <div class="glass p-6 rounded-2xl border border-slate-100/60 shadow-sm">
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="h-8 w-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-600 font-bold text-xs border border-white">
                                    {{ substr($comment->user->name, 0, 1) }}
                                </div>
                                <div class="flex-1">
                                    <p class="text-xs font-bold text-slate-700">
                                        {{ $comment->user->name }}
                                        @if($comment->user->is_admin) <span class="text-red-500 ml-1">Admin</span> @endif
                                    </p>
                                    <p class="text-[10px] text-slate-400">{{ $comment->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                            <p class="text-slate-600 text-sm leading-relaxed">{{ $comment->body }}</p>
                        </div>
                    @empty
                        <div class="text-center py-6 bg-slate-50/50 rounded-xl border border-dashed border-slate-200">
                            <p class="text-slate-500 italic text-sm">No comments yet. Be the first to start the
                                conversation!</p>
                        </div>
                    @endforelse
                </div>

                <!-- Comment Form -->
                @auth
                    <div class="glass p-6 rounded-2xl border border-primary-100/50 bg-primary-50/10">
                        <h4 class="font-bold text-slate-800 mb-4">Leave a Comment</h4>
                        <form action="{{ route('forum.comments.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <textarea name="body" rows="3"
                                    class="w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 bg-white/80 py-3 px-4 text-sm"
                                    placeholder="Shared your thoughts..." required></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-primary-600 text-white px-6 py-2 rounded-full font-bold text-sm hover:bg-primary-700 transition-colors shadow-sm hover:shadow-md transform hover:-translate-y-0.5">
                                    Post Comment
                                </button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="text-center py-8 bg-slate-50 rounded-2xl border border-slate-100">
                        <p class="text-slate-600 mb-3">Join the conversation</p>
                        <a href="{{ route('login') }}" class="inline-block text-primary-600 font-bold hover:underline">Log
                            in to comment</a>
                    </div>
                @endauth
            </div>
        </article>
    </div>
</x-layout>