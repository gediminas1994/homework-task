@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto">
    <div class="flex justify-between mb-4">
        <h1 class="text-2xl font-bold">News</h1>
        <button class="btn">
            <a href="{{ route('news.create') }}">
                Create
            </a>
        </button>
    </div>

    <table class="w-full bg-white shadow rounded">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 text-left">Title</th>
                <th class="p-2 text-left">Content</th>
                <th class="p-2">Date created</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                <tr class="border-t">
                    <td class="p-2">{{ $item->title }}</td>
                    <td class="p-2">{{ Str::limit($item->content, 50) }}</td>
                    <td class="p-2 text-center">{{ $item->created_at->format('Y-m-d') }}</td>
                    <td class="p-2 text-center space-x-2">
                        <button class="btn">
                            <a href="{{ route('news.edit', $item) }}" class="text-blue-500">Edit</a>
                        </button>

                        <form action="{{ route('news.destroy', $item) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection