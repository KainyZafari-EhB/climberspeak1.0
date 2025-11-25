<x-layout>
    <h1 class="text-3xl font-bold mb-8 text-center">Frequently Asked Questions</h1>

    <div class="max-w-3xl mx-auto space-y-8">
        @foreach($categories as $category)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-blue-600 mb-4 border-b pb-2">{{ $category->name }}</h2>

                <div class="space-y-4">
                    @foreach($category->items as $item)
                        <details class="group">
                            <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                <span>{{ $item->question }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                                </span>
                            </summary>
                            <p class="text-gray-600 mt-3 group-open:animate-fadeIn">
                                {{ $item->answer }}
                            </p>
                        </details>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
