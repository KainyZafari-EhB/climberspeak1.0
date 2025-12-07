<x-admin-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <h2 class="text-2xl font-bold mb-6">Add FAQ Question</h2>

            <form action="{{ route('admin.faq.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="faq_category_id" class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                    <select name="faq_category_id" id="faq_category_id"
                        class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('faq_category_id') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label for="question" class="block text-gray-700 text-sm font-bold mb-2">Question</label>
                    <input type="text" name="question" id="question"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required value="{{ old('question') }}">
                    @error('question') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
                </div>

                <div class="mb-4">
                    <label for="answer" class="block text-gray-700 text-sm font-bold mb-2">Answer</label>
                    <textarea name="answer" id="answer" rows="5"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>{{ old('answer') }}</textarea>
                    @error('answer') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Add Question
                    </button>
                    <a href="{{ route('admin.faq.index') }}"
                        class="text-blue-500 hover:text-blue-800 text-sm font-bold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>