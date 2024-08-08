@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Thêm Tag Mới</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="border rounded w-full px-3 py-2" required>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="slug" class="block text-gray-700">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="border rounded w-full px-3 py-2" required>
            @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tạo Tag</button>
        <a href="{{ route('tags.index') }}" class="btn btn-secondary ml-2">Quay lại</a>
    </form>
@endsection
