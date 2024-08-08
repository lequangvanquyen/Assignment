@extends('admin.master')

@section('main-content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Chi Tiết Người Dùng</h1>

        <div class="mb-4">
            <p class="text-lg font-medium text-gray-700"><span class="font-semibold">Tên:</span> {{ $user->name }}</p>
            <p class="text-lg font-medium text-gray-700"><span class="font-semibold">Email:</span> {{ $user->email }}</p>
            <p class="text-lg font-medium text-gray-700"><span class="font-semibold">Vai Trò:</span>
                {{ $user->idgroup == 1 ? 'Quản trị' : 'Người dùng' }}
            </p>
        </div>

        <a href="{{ route('users.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Quay Lại</a>
    </div>
@endsection
