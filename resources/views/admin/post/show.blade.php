@extends('admin.master')

@section('main-content')
    <div class="p-6 bg-white shadow rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Chi tiết bài viết</h1>

        <div class="mb-4">
            <p><strong>ID:</strong> {{ $post->id }}</p>
            <p><strong>Category ID:</strong> {{ $post->category_id }}</p>
            <p><strong>Title:</strong> {{ $post->title }}</p>
            <p><strong>Slug:</strong> {{ $post->slug }}</p>
        </div>

        <div class="mb-4">
            <p><strong>Content:</strong></p>
            <pre class="break-words">{{ $post->content }}</pre>
        </div>


        <div class="mb-4">
            <p><strong>Image:</strong></p>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="object-cover">
            @else
                <p class="text-gray-500">N/A</p>
            @endif
        </div>

        <div class="flex gap-2 mt-4">
            <a href="{{ route('posts.edit', $post->id) }}"
                class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Sửa</a>
            <a href="{{ route('posts.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Quay
                lại</a>
        </div>
    </div>
@endsection
