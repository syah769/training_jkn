@extends('layouts.app')

@section('title', 'Posts List - Training JKN')

@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Posts Management</h1>
                    <p class="text-gray-600">
                        Complete CRUD operations untuk Posts dengan Eloquent relationship
                    </p>
                </div>
                <a href="{{ route('posts.create') }}"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 font-medium">
                    Create New Post
                </a>
            </div>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-8">
                {{ session('success') }}
            </div>
        @endif

        <!-- Posts Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Content</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($posts as $post)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $post->id }}</td>
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $post->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ Str::limit($post->content, 50) }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }}</td>
                            <td class="px-6 py-4 text-sm space-x-2">
                                <a href="{{ route('posts.show', $post) }}"
                                    class="text-blue-600 hover:text-blue-800">View</a>
                                <a href="{{ route('posts.edit', $post) }}"
                                    class="text-green-600 hover:text-green-800">Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                No posts found. <a href="{{ route('posts.create') }}"
                                    class="text-blue-600 hover:text-blue-800">Create your first post!</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
