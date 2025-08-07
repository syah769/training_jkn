@extends('layouts.app')

@section('title', 'Contact Form - Training JKN')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body text-center">
                    <h1 class="h3 mb-3">User Registration Training</h1>
                    <p class="text-muted mb-0">
                        Contoh form registration untuk training Laravel dengan Bootstrap Forms
                    </p>
                </div>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                </div>
            @endif

            <!-- Contact Form -->
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Full Name *
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name"
                                aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text">Please provide your complete full name.</div>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter your email address" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="form-label">
                                Password *
                            </label>
                            <input type="password" id="password" name="password" required
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Enter your password" aria-describedby="passwordHelp">
                            <div id="passwordHelp" class="form-text">
                                Your password must be at least 8 characters long and contain letters and numbers.
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Register Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
