@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Tạo bài viết mới</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Tiêu đề:</label>
            <input type="text" id="title" name="title" class="form-control mt-1 block w-full"
                value="{{ old('title') }}" required>
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="slug" class="block text-sm font-medium text-gray-700">Slug:</label>
            <input type="text" id="slug" name="slug" class="form-control mt-1 block w-full"
                value="{{ old('slug') }}" required>
            @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Nội dung:</label>
            <textarea id="editor" name="content" rows="5" class="form-control mt-1 block w-full" required>{{ old('content') }}</textarea>
            @error('content')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Hình ảnh:</label>
            <input type="file" id="image" name="image" class="form-control mt-1 block w-full">
            @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="published_at" class="block text-sm font-medium text-gray-700">Ngày xuất bản:</label>
            <input type="datetime-local" id="published_at" name="published_at" class="form-control mt-1 block w-full"
                value="{{ old('published_at') }}">
            @error('published_at')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Danh mục:</label>
            <select id="category_id" name="category_id" class="form-control mt-1 block w-full" required>
                <option value="">Chọn danh mục</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tạo</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary ml-2">Quay lại</a>
    </form>

    {{-- @push('scripts')
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor => {
                        console.log('Editor was initialized', editor);
                    })
                    .catch(error => {
                        console.error('CKEditor initialization error:', error);
                    });
            });
        </script>
    @endpush --}}
@endsection
