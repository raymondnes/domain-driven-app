@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Create User</h1>

    <form action="{{ route('users.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                Name
            </label>
            <input type="text" name="name" id="name" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                   value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                Email
            </label>
            <input type="email" name="email" id="email" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                   value="{{ old('email') }}" required>
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                Password
            </label>
            <input type="password" name="password" id="password" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">
                Confirm Password
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" 
                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create User
            </button>
        </div>
    </form>
</div>
@endsection