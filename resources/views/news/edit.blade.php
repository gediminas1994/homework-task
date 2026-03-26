@extends('layouts.app')

@section('content')

@include('components.form-errors')

<div class="max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit News</h1>

    <form method="POST" action="{{ route('news.update', $news) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="title"
            value="{{ $news->title }}"
            class="w-full border p-2 rounded"> 

        <textarea name="content"
            class="w-full border p-2 rounded" rows="5">{{ $news->content }}</textarea>

        <button class="bg-blue-500 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection