@extends('layouts.app')

@section('title', 'Create Post - Training JKN')

@section('content')
    <div class="max-w-2xl mx-auto">
        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-8 mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">Create New Post</h1>
                    <p class="text-gray-600">
                        Add a new blog post
                    </p>
                </div>
                <a href="{{ route('posts.index') }}"
                    class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Back to Posts</a>
            </div>
        </div>

        <!-- Create Form -->
        <div class="bg-white rounded-lg shadow-md p-8">
            <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Title Field -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                        Post Title *
                    </label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
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
                        placeholder="Write your post content here...">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Buttons -->
                <div class="flex space-x-4 pt-4">
                    <button type="submit"
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors font-medium">
                        Create Post
                    </button>
                    <a href="{{ route('posts.index') }}"
                        class="flex-1 bg-gray-600 text-white py-3 px-6 rounded-lg hover:bg-gray-700 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors font-medium text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
