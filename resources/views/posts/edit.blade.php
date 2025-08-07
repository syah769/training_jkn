@extends('layouts.app')

@section('title', 'Edit Post - Training JKN')

@section('content')
    <div class="max-w-2xl mx-auto">
        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Edit Post</h1>
                    <p class="text-gray-600">
                        Update post information
                    </p>
                </div>
                <div class="space-x-2">
                    <a href="{{ route('posts.show', $post) }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">View Post</a>
                    <a href="{{ route('posts.index') }}"
                        class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Back to Posts</a>
                </div>
            </div>
        </div>

        <!-- Edit Form -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Post Title *
                    </label>
                    <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required
                        class="w-full px-4 py-3 border @error('title') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        placeholder="Enter post title">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content Field -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                        Post Content *
                    </label>
                    <textarea id="content" name="content" rows="8" required
                        class="w-full px-4 py-3 border @error('content') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        placeholder="Write your post content here...">{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Post Meta Info -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="font-medium text-gray-700 mb-2">Post Information</h4>
                    <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                        <div>
                            <span class="font-medium">Post ID:</span> {{ $post->id }}
                        </div>
                        <div>
                            <span class="font-medium">Created:</span> {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="flex space-x-4 pt-4">
                    <button type="submit"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors font-medium">
                        Update Post
                    </button>
                    <a href="{{ route('posts.show', $post) }}"
                        class="flex-1 bg-gray-600 text-white py-3 px-6 rounded-lg hover:bg-gray-700 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors font-medium text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
