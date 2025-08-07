@extends('layouts.app')

@section('title', 'User Details - Training JKN')

@section('content')
    <div class="max-w-4xl mx-auto">
        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">User Details</h1>
                    <p class="text-gray-600">
                        View user information
                    </p>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('users.edit', $user) }}"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Edit</a>
                    <a href="{{ url('/users') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Back
                        to List</a>
                </div>
            </div>
        </div>

        <!-- User Information -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">ID</label>
                    <p class="text-lg text-gray-900">{{ $user->id }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <p class="text-lg text-gray-900">{{ $user->name }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <p class="text-lg text-gray-900">{{ $user->email }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Created At</label>
                    <p class="text-lg text-gray-900">{{ $user->created_at->format('M d, Y h:i A') }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Updated At</label>
                    <p class="text-lg text-gray-900">{{ $user->updated_at->format('M d, Y h:i A') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
