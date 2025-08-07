@extends('layouts.app')

@section('title', 'User Details - Training JKN')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h1 class="h3 mb-2">User Details</h1>
                            <p class="text-muted mb-0">
                                View user information
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('users.edit', $user) }}" class="btn btn-success me-2">Edit</a>
                            <a href="{{ url('/users') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Information -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">ID</strong>
                            <span class="fs-5">{{ $user->id }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Full Name</strong>
                            <span class="fs-5">{{ $user->name }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Email Address</strong>
                            <span class="fs-5">{{ $user->email }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Created At</strong>
                            <span class="fs-5">{{ $user->created_at->format('M d, Y h:i A') }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <strong class="text-muted d-block mb-1">Updated At</strong>
                            <span class="fs-5">{{ $user->updated_at->format('M d, Y h:i A') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
