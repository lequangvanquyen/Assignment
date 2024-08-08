@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Danh sách Tags</h1>
    <a href="{{ route('tags.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4">Thêm tag mới</a>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Slug</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $tag->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $tag->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $tag->slug }}</td>
                    <td class="py-2 px-4 border-b">
                        <div class="flex gap-2">
                            <a href="{{ route('tags.show', $tag->id) }}"
                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Xem</a>
                            <a href="{{ route('tags.edit', $tag->id) }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Sửa</a>
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa tag này không?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Xóa</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $tags->links() }}
    </div>
@endsection
