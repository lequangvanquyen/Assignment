@extends('admin.master')

@section('main-content')
    <h1 class="text-2xl font-bold mb-4">Danh Sách Người Dùng</h1>

    <a href="{{ route('users.create') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">Tạo Người Dùng</a>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-2 px-4 border-b">Tên</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">ID Group</th>
                <th class="py-2 px-4 border-b">Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->idgroup }}</td>
                    <td class="py-2 px-4 border-b">
                        <div class="flex gap-2">
                            <a href="{{ route('users.show', $user) }}"
                                class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Xem</a>
                            <a href="{{ route('users.edit', $user) }}"
                                class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Sửa</a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?');">
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
        {{ $users->links() }}
    </div>
@endsection
