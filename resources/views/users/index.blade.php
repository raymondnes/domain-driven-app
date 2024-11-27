@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto">
    <h1 class="text-2xl font-bold mb-4">Users</h1>
    
    <a href="{{ route('users.create') }}" 
       class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Create New User
    </a>

    @if($users->count())
        <table class="w-full border">
            <thead>
                <tr>
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border p-2">{{ $user->name }}</td>
                        <td class="border p-2">{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No users found.</p>
    @endif
</div>
@endsection