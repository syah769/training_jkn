@extends('layouts.app')

@section('title', 'Create Post - Training JKN')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-2">Create New Post</h1>
                            <p class="text-muted mb-0">
                                Add a new blog post
                            </p>
                        </div>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
                    </div>
                </div>
            </div>

            <!-- Create Form -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        <!-- Title Field -->
                        <div class="mb-3">
                            <label for="title" class="form-label">
                                Post Title *
                            </label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" required
                                class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title">
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
                                class="form-control @error('content') is-invalid @enderror" placeholder="Write your post content here...">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary me-md-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
