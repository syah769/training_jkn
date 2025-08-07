@extends('layouts.app')

@section('title', 'Edit User - Training JKN')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="h3 mb-2">Edit User</h1>
                            <p class="text-muted mb-0">
                                Update user information
                            </p>
                        </div>
                        <a href="{{ url('/users') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>

            <!-- Edit Form -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('users.update', $user) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Full Name *
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                                required class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter full name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                                required class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter email address">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="form-label">
                                Password (Leave blank to keep current password)
                            </label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Enter new password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('users.show', $user) }}" class="btn btn-secondary me-md-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
