@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create News Entry</h1>

    <form method="POST" action="{{ route('news.store') }}" class="space-y-4">
        @csrf

        <input type="text" name="title" placeholder="Title"
            class="w-full border p-2 rounded" required>

        <textarea name="content" placeholder="Content"
            class="w-full border p-2 rounded" rows="5" required></textarea>

        <button class="bg-green-500 text-white px-4 py-2 rounded">
            Create
        </button>
    </form>
</div>
@endsection