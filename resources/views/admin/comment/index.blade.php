@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Quản Lý Bình Luận</h1>

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">ID Bài Viết</th>
                <th class="py-2 px-4 border-b">Nội Dung</th>
                <th class="py-2 px-4 border-b">Người Dùng</th>
                <th class="py-2 px-4 border-b">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($comments as $comment)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $comment->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $comment->post_id }}</td>
                    <td class="py-2 px-4 border-b break-words">{{ $comment->content }}</td>
                    <td class="py-2 px-4 border-b">{{ $comment->user ? $comment->user->name : 'Không xác định' }}</td>
                    <td class="py-2 px-4 border-b">
                        <div class="flex gap-2">
                            <form action="{{ route('comment.destroy', $comment->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?');">
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
        {{ $comments->links() }}
    </div>
@endsection
