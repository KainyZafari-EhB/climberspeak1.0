<x-layout background="events-bg">
    <div class="max-w-3xl mx-auto glass-climbing rounded-2xl p-8 my-8">
        <header class="mb-8 border-b border-slate-200 pb-4">
            <h1 class="text-3xl font-bold text-slate-900">Create Event</h1>
            <p class="text-slate-600 mt-2">Fill out the form to add a new climbing event.</p>
        </header>

        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Title</label>
                <input id="title" name="title" type="text" value="{{ old('title') }}"
                    class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('title') border-red-500 @enderror"
                    placeholder="e.g., Weekend Bouldering Session">
                @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Description</label>
                <textarea id="description" name="description" rows="5"
                    class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('description') border-red-500 @enderror"
                    placeholder="Describe the event...">{{ old('description') }}</textarea>
                @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="date" class="block text-sm font-medium text-slate-700 mb-1">Date</label>
                    <input id="date" name="date" type="date" value="{{ old('date') }}"
                        class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('date') border-red-500 @enderror">
                    @error('date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="time" class="block text-sm font-medium text-slate-700 mb-1">Time</label>
                    <input id="time" name="time" type="time" value="{{ old('time') }}"
                        class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('time') border-red-500 @enderror">
                    @error('time') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-slate-700 mb-1">Location</label>
                <input id="location" name="location" type="text" value="{{ old('location') }}"
                    class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('location') border-red-500 @enderror"
                    placeholder="e.g., Central Rock Gym">
                @error('location') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label for="capacity" class="block text-sm font-medium text-slate-700 mb-1">Capacity</label>
                    <input id="capacity" name="capacity" type="number" min="1" value="{{ old('capacity') }}"
                        class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500 @error('capacity') border-red-500 @enderror">
                    @error('capacity') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-slate-700 mb-1">Image (optional)</label>
                    <input id="image" name="image" type="file" accept="image/*"
                        class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary-50 file:text-primary-700 hover:file:bg-primary-100">
                    @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="flex items-center justify-end pt-6 border-t border-slate-200 gap-4">
                <a href="{{ route('events.index') }}" class="text-slate-600 hover:text-slate-900 font-medium">
                    Cancel
                </a>
                <button type="submit"
                    class="bg-primary-500 text-white px-6 py-2 rounded-lg hover:bg-primary-600 shadow-md transition font-semibold">
                    Create Event
                </button>
            </div>
        </form>
    </div>
</x-layout>