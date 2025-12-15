<x-layout>
    <div class="max-w-3xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-8">
            <a href="{{ route('forum.index') }}"
                class="text-slate-500 hover:text-primary-600 font-medium inline-flex items-center gap-1 transition-colors">
                &larr; Back to Forum
            </a>
        </div>

        <div class="glass p-8 rounded-3xl shadow-xl border border-white/60 relative overflow-hidden">
            <div class="relative z-10">
                <h1 class="text-3xl font-extrabold text-slate-800 mb-6">Create New Discussion</h1>

                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf

                    <div class="mb-6">
                        <label for="title" class="block text-sm font-bold text-slate-700 mb-2">Title</label>
                        <input type="text" name="title" id="title"
                            class="w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 bg-white/80"
                            placeholder="e.g., Best climbing spots in Yosemite?" required>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="body" class="block text-sm font-bold text-slate-700 mb-2">Content</label>
                        <textarea name="body" id="body" rows="8"
                            class="w-full rounded-xl border-slate-200 focus:border-primary-500 focus:ring-primary-500 bg-white/80"
                            placeholder="Share your thoughts, tips, or questions..." required></textarea>
                        @error('body')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end gap-4">
                        <a href="{{ route('forum.index') }}"
                            class="text-slate-500 hover:text-slate-700 font-medium">Cancel</a>
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-bold rounded-full text-white bg-primary-600 hover:bg-primary-700 shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                            Post Discussion
                        </button>
                    </div>
                </form>
            </div>

            <!-- decorative bg element -->
            <div
                class="absolute -top-10 -right-10 w-64 h-64 bg-primary-50 rounded-full blur-3xl opacity-50 pointer-events-none">
            </div>
        </div>
    </div>
</x-layout>