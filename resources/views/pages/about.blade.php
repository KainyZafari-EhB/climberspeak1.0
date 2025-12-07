{{-- resources/views/pages/about.blade.php --}}
@php
    $appName = $appName ?? config('app.name', 'Application');
    $team = $team ?? [
        (object)['name' => 'Alice Example', 'role' => 'Founder', 'avatar' => null],
        (object)['name' => 'Bob Example', 'role' => 'Lead Developer', 'avatar' => null],
    ];
@endphp

<div class="max-w-5xl mx-auto px-4 py-12">
    <header class="text-center mb-10">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-2">About {{ $appName }}</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Built to make work simpler and more enjoyable. Learn who we are, what we stand for and how to get in touch.
        </p>
    </header>

    <section class="bg-white shadow rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-3">Our mission</h2>
        <p class="text-gray-700 leading-relaxed">
            We aim to deliver reliable, maintainable software that helps teams focus on what matters.
            We value clarity, collaboration and continuous improvement.
        </p>
    </section>

    <section class="grid md:grid-cols-2 gap-6 mb-6">
        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-xl font-medium text-gray-800 mb-2">What we value</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Developer ergonomics and good DX</li>
                <li>Readable, tested code</li>
                <li>User-centered design and accessibility</li>
            </ul>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-xl font-medium text-gray-800 mb-2">How we work</h3>
            <p class="text-gray-700">
                Small cross-functional teams, short feedback loops and automated tests drive our process.
                We prefer orthogonal, well-documented solutions over complex optimizations.
            </p>
        </div>
    </section>

    <section class="mb-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-2xl font-semibold text-gray-800">Team</h3>
            <a href="{{ \Illuminate\Support\Facades\Route::has('contact') ? route('contact') : url('/contact') }}"
               class="text-sm px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                Contact us
            </a>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($team as $member)
                <div class="bg-white shadow rounded-lg p-4 flex items-center space-x-4">
                    @if(!empty($member->avatar))
                        <img src="{{ $member->avatar }}" alt="{{ $member->name }}" class="w-12 h-12 rounded-full object-cover">
                    @else
                        <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center text-sm font-medium text-gray-600">
                            {{ strtoupper(substr($member->name ?? 'U', 0, 1)) }}
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-gray-800">{{ $member->name }}</div>
                        <div class="text-sm text-gray-600">{{ $member->role ?? 'Team member' }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="text-center text-sm text-gray-500 mt-8">
        <div>© {{ date('Y') }} {{ $appName }}. All rights reserved.</div>
    </footer>
</div>
