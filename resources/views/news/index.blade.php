<x-layout background="news-bg">
    <h1 class="text-3xl font-bold mb-6 border-b border-white/20 pb-2 text-white drop-shadow-lg">Latest News</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($news as $item)
            <div class="glass-climbing rounded-xl overflow-hidden hover:shadow-2xl transition">
                <img src="{{ $item->image ?? 'https://via.placeholder.com/400x200' }}" alt="{{ $item->title }}"
                    class="w-full h-48 object-cover">

                <div class="p-4">
                    <span
                        class="text-gray-500 text-sm">{{ $item->published_at ? $item->published_at->format('M d, Y') : 'Draft' }}</span>
                    <h2 class="text-xl font-bold mb-2 hover:text-primary-500">
                        <a href="{{ route('news.show', $item) }}">{{ $item->title }}</a>
                    </h2>
                    <p class="text-slate-700 mb-4">{{ Str::limit($item->content, 100) }}</p>
                    <a href="{{ route('news.show', $item) }}" class="text-primary-500 font-semibold hover:underline">Read
                        more
                        &rarr;</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>