<x-layout>
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    <div class="bg-white p-6 rounded shadow max-w-lg">
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Message</label>
                <textarea name="message" class="w-full border p-2 rounded" rows="5" required></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Send Message</button>
        </form>
    </div>
</x-layout>
