@extends('layouts.app')

@section('title', $post->title . ' - Training JKN')

@section('content')
    <div class="max-w-4xl mx-auto">
        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
                    <p class="text-gray-600">
                        Created on {{ $post->created_at->format('M d, Y h:i A') }}
                    </p>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('posts.edit', $post) }}"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">Edit</a>
                    <a href="{{ route('posts.index') }}"
                        class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Back to Posts</a>
                </div>
            </div>
        </div>

        <!-- Post Content -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <div class="prose max-w-none">
                <div class="text-lg leading-relaxed text-gray-800 whitespace-pre-line">{{ $post->content }}</div>
            </div>
        </div>

        <!-- Post Meta Information -->
        <div class="bg-white rounded-lg shadow-md p-8 mt-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Post Information</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Post ID</label>
                    <p class="text-gray-900">{{ $post->id }}</p>
                </div>


                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Created At</label>
                    <p class="text-gray-900">{{ $post->created_at->format('M d, Y h:i A') }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Last Updated</label>
                    <p class="text-gray-900">{{ $post->updated_at->format('M d, Y h:i A') }}</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-4 mt-6 pt-6 border-t border-gray-200">
                <a href="{{ route('posts.edit', $post) }}"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
                    Edit Post
                </a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-colors"
                        onclick="return confirm('Are you sure you want to delete this post?')">
                        Delete Post
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
