@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Danh sách danh mục</h1>
    <a href="{{ route('category.create') }}" class="btn btn-primary">Thêm danh mục mới</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Slug</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}"
                            class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Xem</a>
                        <a href="{{ route('category.edit', $category->id) }}"
                            class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Sửa</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        {{ $categories->links() }}
    </div>
@endsection
