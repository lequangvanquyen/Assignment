@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Sửa bài viết</h1>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề:</label>
            <input type="text" id="title" name="title" class="form-control mt-1 block w-full"
                value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug:</label>
            <input type="text" id="slug" name="slug" class="form-control mt-1 block w-full"
                value="{{ old('slug', $post->slug) }}" required>
        </div>

        <div class="form-group mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Nội dung:</label>
            <textarea id="content" name="content" rows="10" class="form-control mt-1 block w-full">{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Danh mục:</label>
            <select id="category_id" name="category_id" class="form-control mt-1 block w-full">
                <option value="">Chọn danh mục</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>



        <div class="form-group mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Ảnh:</label>
            <input type="file" name="image" id="image" class="form-control mt-1 block w-full">
        </div>

        @if ($post->image)
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Hình ảnh hiện tại:</label>
                <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" class="w-48 h-auto">
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary ml-2">Quay lại</a>
    </form>
@endsection
