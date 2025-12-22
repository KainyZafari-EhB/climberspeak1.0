<x-admin-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Message Details</h2>
                <a href="{{ route('admin.contact.index') }}" class="text-blue-500 hover:text-blue-700">&larr; Back to
                    Messages</a>
            </div>

            <div class="bg-gray-50 rounded-lg p-6 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Name</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $message->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Email</label>
                        <p class="mt-1 text-lg text-gray-900">
                            <a href="mailto:{{ $message->email }}"
                                class="text-blue-600 hover:underline">{{ $message->email }}</a>
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Phone</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $message->phone ?? 'Not provided' }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Received</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $message->created_at->format('M d, Y \a\t H:i') }}</p>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-200">
                    <label class="block text-sm font-medium text-gray-500">Subject</label>
                    <p class="mt-1 text-lg text-gray-900 font-semibold">{{ $message->subject }}</p>
                </div>

                <div class="pt-4 border-t border-gray-200">
                    <label class="block text-sm font-medium text-gray-500">Message</label>
                    <div class="mt-2 p-4 bg-white rounded border border-gray-200">
                        <p class="text-gray-900 whitespace-pre-wrap">{{ $message->message }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex gap-4">
                <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Reply via Email
                </a>
                <form action="{{ route('admin.contact.destroy', $message) }}" method="POST" class="inline"
                    onsubmit="return confirm('Delete this message?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>