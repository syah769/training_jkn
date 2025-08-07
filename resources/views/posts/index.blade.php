@extends('layouts.app')

@section('title', 'Posts List - Training JKN')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-2">Posts Management</h1>
                            <p class="text-muted mb-0">
                                Simple CRUD operations untuk Posts
                            </p>
                        </div>
                        <a href="{{ route('posts.create') }}" class="btn btn-primary">
                            Create New Post
                        </a>
                    </div>
                </div>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Posts Table -->
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td class="fw-semibold">{{ $post->title }}</td>
                                        <td class="text-muted">{{ Str::limit($post->content, 50) }}</td>
                                        <td class="text-muted">{{ $post->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('posts.show', $post) }}"
                                                class="btn btn-sm btn-outline-primary me-1">View</a>
                                            <a href="{{ route('posts.edit', $post) }}"
                                                class="btn btn-sm btn-outline-success me-1">Edit</a>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">
                                            No posts found. <a href="{{ route('posts.create') }}"
                                                class="text-decoration-none">Create your first post!</a>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
