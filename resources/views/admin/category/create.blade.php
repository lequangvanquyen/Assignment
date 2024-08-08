@extends('admin.master')

@section('main-content')

    <h1>Tạo danh mục mới</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" id="slug" name="slug" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tạo</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary ml-2">Quay lại</a>
    </form>

@endsection
