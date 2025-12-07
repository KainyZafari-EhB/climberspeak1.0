// file: resources/views/news/show.blade.php
@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
        <header class="mb-4">
            <h1 class="text-2xl font-bold text-gray-900">{{ $news->title }}</h1>
            <p class="text-sm text-gray-500 mt-1">
                Published: {{ optional($news->created_at)->format('Y-m-d H:i') }}
                @if(!empty($news->author)) · Author: {{ $news->author }} @endif
            </p>
        </header>

        @if(!empty($news->image))
            <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full rounded mb-4 object-cover">
        @endif

        <article class="prose prose-sm max-w-none text-gray-800">
            {!! $news->body !!}
        </article>

        <div class="mt-6">
            <a href="{{ url()->previous() }}" class="text-indigo-600 hover:underline">← Back</a>
        </div>
    </div>
@endsection
