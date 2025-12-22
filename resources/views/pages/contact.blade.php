<x-layout>
    <div class="max-w-5xl mx-auto py-12 px-4">
        <h1 class="text-4xl font-bold text-center mb-10 text-slate-900">Contact Us</h1>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="glass-climbing p-8 rounded-2xl">
                <h2 class="text-2xl font-semibold mb-6 text-slate-800">Send us a message</h2>

                @if(session('status'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded" role="alert">
                        <p>{{ session('status') }}</p>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-slate-700 font-medium mb-1">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500"
                            required>
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-slate-700 font-medium mb-1">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500"
                                required>
                            @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-slate-700 font-medium mb-1">Phone (Optional)</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') }}"
                                class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-slate-700 font-medium mb-1">Subject</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"
                            class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500"
                            required>
                        @error('subject') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-slate-700 font-medium mb-1">Message</label>
                        <textarea name="message" id="message" rows="5"
                            class="w-full border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500"
                            required>{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- Math Captcha -->
                    <div class="bg-slate-50/80 p-4 rounded-lg border border-slate-200">
                        <label for="captcha" class="block text-slate-700 font-medium mb-2">
                            Security Question: What is {{ $num1 }} + {{ $num2 }}?
                        </label>
                        <input type="number" name="captcha" id="captcha"
                            class="w-24 border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring-primary-500"
                            required>
                        @error('captcha') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-primary-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-primary-600 transition duration-300 shadow-lg hover:shadow-primary-500/30">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="h-full">
                <div class="glass-climbing p-8 rounded-2xl h-full flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-8 text-slate-800 border-b border-slate-200 pb-4">Get in Touch</h2>
                    <div class="space-y-6 text-slate-700">
                        <div
                            class="flex items-center p-4 bg-white/50 rounded-xl transition hover:bg-primary-50 hover:shadow-md">
                            <span class="text-primary-500 mr-4 text-3xl">📍</span>
                            <span class="text-lg">
                                <strong>ClimbConnect HQ</strong><br>
                                123 Boulder Boulevard<br>
                                Peak City, 1500 Belgium
                            </span>
                        </div>
                        <div
                            class="flex items-center p-4 bg-white/50 rounded-xl transition hover:bg-primary-50 hover:shadow-md">
                            <span class="text-primary-500 mr-4 text-3xl">📧</span>
                            <a href="mailto:info@climberspeak.com"
                                class="text-lg hover:text-primary-600 font-medium">info@climberspeak.com</a>
                        </div>
                        <div
                            class="flex items-center p-4 bg-white/50 rounded-xl transition hover:bg-primary-50 hover:shadow-md">
                            <span class="text-primary-500 mr-4 text-3xl">📞</span>
                            <a href="tel:+15550192834" class="text-lg hover:text-primary-600 font-medium">+32 491 23 54
                                69</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>