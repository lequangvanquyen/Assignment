@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Tag Chi tiết</h1>

    <div class="bg-white p-4 rounded shadow">
        <p><strong>ID:</strong> {{ $tag->id }}</p>
        <p><strong>Name:</strong> {{ $tag->name }}</p>
        <p><strong>Slug:</strong> {{ $tag->slug }}</p>
        <a href="{{ route('tags.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Quay lại</a>
    </div>
@endsection
