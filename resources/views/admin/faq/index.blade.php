<x-admin-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between mb-6">
                <h3 class="text-lg font-bold">Manage FAQs</h3>
                <a href="{{ route('admin.faq.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add Question
                </a>
            </div>

            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('status') }}
                </div>
            @endif

            @foreach($categories as $category)
                <div class="mb-8">
                    <h4 class="text-md font-semibold text-gray-700 bg-gray-100 p-2 rounded mb-2">{{ $category->name }}</h4>

                    @if($category->items->isEmpty())
                        <p class="text-gray-500 text-sm italic pl-4">No questions in this category.</p>
                    @else
                        <ul class="divide-y divide-gray-200">
                            @foreach($category->items as $item)
                                <li class="py-3 flex justify-between items-center hover:bg-gray-50 px-4 rounded">
                                    <div>
                                        <span class="font-medium text-gray-800">{{ $item->question }}</span>
                                        <p class="text-sm text-gray-500 truncate w-96">{{ $item->answer }}</p>
                                    </div>
                                    <form action="{{ route('admin.faq.destroy', $item) }}" method="POST"
                                        onsubmit="return confirm('Delete this question?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 font-bold text-sm">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>