@extends('layouts.app')

@section('title', 'Edit Post - Training JKN')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-2">Edit Post</h1>
                            <p class="text-muted mb-0">
                                Update post information
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-primary me-2">View Post</a>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Title Field -->
                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Post Title *
                            </label>
                            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"
                                required class="form-control @error('title') is-invalid @enderror"
                                placeholder="Enter post title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Content Field -->
                        <div class="mb-4">
                            <label for="content" class="form-label">
                                Post Content *
                            </label>
                            <textarea id="content" name="content" rows="8" required
                                class="form-control @error('content') is-invalid @enderror" placeholder="Write your post content here...">{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Post Meta Info -->
                        <div class="alert alert-light mb-4">
                            <h6 class="alert-heading mb-2">Post Information</h6>
                            <div class="row small text-muted">
                                <div class="col-6">
                                    <strong>Post ID:</strong> {{ $post->id }}
                                </div>
                                <div class="col-6">
                                    <strong>Created:</strong> {{ $post->created_at->format('M d, Y') }}
                                </div>
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-secondary me-md-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
