@extends('admin.master')

@section('main-content')
    <div class="bg-white p-6 rounded-lg shadow-md max-w-lg mx-auto">
        <h1 class="text-2xl font-bold mb-6">Chỉnh Sửa Người Dùng</h1>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Tên</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="idgroup" class="block text-sm font-medium text-gray-700">ID Group</label>
                <input type="text" id="idgroup" name="idgroup" value="{{ $user->idgroup }}" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('idgroup')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>



            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cập Nhật</button>
                <a href="{{ route('users.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Hủy</a>
            </div>
        </form>
    </div>
@endsection
