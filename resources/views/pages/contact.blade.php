<x-layout>
    <div class="max-w-5xl mx-auto py-12 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-gray-900">Contact Us</h1>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Send us a message</h2>

                @if(session('status'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                        <p>{{ session('status') }}</p>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required>
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-700 font-medium mb-1">Phone (Optional)</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-700 font-medium mb-1">Subject</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required>
                        @error('subject') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-gray-700 font-medium mb-1">Message</label>
                        <textarea name="message" id="message" rows="5"
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required>{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Math Captcha -->
                    <div class="bg-gray-50 p-4 rounded-md border border-gray-200">
                        <label for="captcha" class="block text-gray-700 font-medium mb-2">
                            Security Question: What is {{ $num1 }} + {{ $num2 }}?
                        </label>
                        <input type="number" name="captcha" id="captcha"
                            class="w-24 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            required>
                        @error('captcha') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white font-bold py-3 px-4 rounded-md hover:bg-blue-700 transition duration-300 shadow-md">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold mb-6 text-gray-800">Get in Touch</h2>
                    <div class="space-y-4 text-gray-600">
                        <p class="flex items-start">
                            <span class="text-blue-600 mr-3 text-xl">📍</span>
                            <span>
                                <strong>ClimbConnect HQ</strong><br>
                                123 Boulder Boulevard<br>
                                Peak City, 1500 Belgium
                            </span>
                        </p>
                        <p class="flex items-center">
                            <span class="text-blue-600 mr-3 text-xl">📧</span>
                            <a href="mailto:info@climberspeak.com" class="hover:text-blue-600">info@climberspeak.com</a>
                        </p>
                        <p class="flex items-center">
                            <span class="text-blue-600 mr-3 text-xl">📞</span>
                            <a href="tel:+15550192834" class="hover:text-blue-600">+32 491 23 54 69</a>
                        </p>
                    </div>
                </div>

                <div class="bg-blue-600 p-8 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-bold mb-4">Join the Community</h3>
                    <p class="mb-6 text-blue-100">
                        Stay updated with the latest events and news. Sign up for an account today!
                    </p>
                    <a href="{{ route('register') }}"
                        class="inline-block bg-white text-blue-600 font-bold py-2 px-6 rounded-full hover:bg-gray-100 transition">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>