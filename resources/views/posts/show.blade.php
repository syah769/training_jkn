@extends('layouts.app')

@section('title', $post->title . ' - Training JKN')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h1 class="h3 mb-2">{{ $post->title }}</h1>
                            <p class="text-muted mb-0">
                                Created on {{ $post->created_at->format('M d, Y h:i A') }}
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-success me-2">Edit</a>
                            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Post Content -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="fs-5 lh-base" style="white-space: pre-line;">{{ $post->content }}</div>
                </div>
            </div>

            <!-- Post Meta Information -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Post Information</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Post ID</strong>
                            <span>{{ $post->id }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Created At</strong>
                            <span>{{ $post->created_at->format('M d, Y h:i A') }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Last Updated</strong>
                            <span>{{ $post->updated_at->format('M d, Y h:i A') }}</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <hr>
                    <div class="d-flex gap-2">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-success">
                            Edit Post
                        </a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this post?')">
                                Delete Post
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
