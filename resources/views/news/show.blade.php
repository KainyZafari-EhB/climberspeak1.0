<x-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow-md mt-6">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">{{ $news->title }}</h1>
            <p class="text-sm text-gray-500 mt-2">
                Published: {{ $news->published_at ? $news->published_at->format('M d, Y') : 'Draft' }}
            </p>
        </header>

        @if($news->image_path)
            <img src="{{ $news->image_path }}" alt="{{ $news->title }}"
                class="w-full rounded-lg mb-6 object-cover shadow-sm">
        @endif

        <article class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! nl2br(e($news->content)) !!}
        </article>

        <div class="mt-8 border-t pt-6">
            <a href="{{ route('news.index') }}" class="text-blue-600 hover:underline font-semibold">← Back to News</a>
        </div>
    </div>
</x-layout>