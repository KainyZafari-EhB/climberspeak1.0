<div class="max-w-3xl mx-auto bg-white shadow-sm rounded-lg p-6">
    <header class="mb-6">
        <h1 class="text-2xl font-semibold text-gray-900">Create Event</h1>
        <p class="text-sm text-gray-600">Fill out the form to add a new event.</p>
    </header>

    <form action="{{ \Illuminate\Support\Facades\Route::has('events.store') ? route('events.store') : url('/events') }}"
          method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input id="title" name="title" type="text"
                   value="{{ old('title', $event->title ?? '') }}"
                   class="mt-1 block w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror">
            @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="5"
                      class="mt-1 block w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror">{{ old('description', $event->description ?? '') }}</textarea>
            @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input id="date" name="date" type="date"
                       value="{{ old('date', optional($event->date)->format('Y-m-d') ?? '') }}"
                       class="mt-1 block w-full border rounded-md px-3 py-2 @error('date') border-red-500 @enderror">
                @error('date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                <input id="time" name="time" type="time"
                       value="{{ old('time', optional($event->date)->format('H:i') ?? '') }}"
                       class="mt-1 block w-full border rounded-md px-3 py-2 @error('time') border-red-500 @enderror">
                @error('time') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <input id="location" name="location" type="text"
                   value="{{ old('location', $event->location ?? '') }}"
                   class="mt-1 block w-full border rounded-md px-3 py-2 @error('location') border-red-500 @enderror">
            @error('location') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
                <input id="capacity" name="capacity" type="number" min="1"
                       value="{{ old('capacity', $event->capacity ?? '') }}"
                       class="mt-1 block w-full border rounded-md px-3 py-2 @error('capacity') border-red-500 @enderror">
                @error('capacity') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image (optional)</label>
                <input id="image" name="image" type="file" accept="image/*"
                       class="mt-1 block w-full @error('image') border-red-500 @enderror">
                @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
        </div>

        <div class="flex items-center justify-between pt-4 border-t">
            <div>
                <a href="{{ \Illuminate\Support\Facades\Route::has('events.index') ? route('events.index') : url('/events') }}"
                   class="text-sm px-3 py-2 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200">
                    Cancel
                </a>
            </div>

            <div>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Create Event
                </button>
            </div>
        </div>
    </form>
</div>
