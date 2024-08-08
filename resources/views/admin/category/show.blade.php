@extends('admin.master')

@section('main-content')
    <h1>Chi tiết danh mục</h1>
    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Tên:</strong> {{ $category->name }}</p>
    <p><strong>Slug:</strong> {{ $category->slug }}</p>
    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Sửa</a>
    <a href="{{ route('category.index') }}" class="btn btn-secondary">Quay lại</a>
@endsection
