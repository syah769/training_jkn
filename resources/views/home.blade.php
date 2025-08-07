@extends('layouts.app')

@section('title', 'Home - Training JKN')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <!-- Welcome Hero Section -->
            <div class="card border-0 shadow">
                <div class="card-body text-center py-5">
                    <h1 class="display-4 fw-bold text-primary mb-4">Welcome to Training JKN</h1>
                    <p class="lead text-muted mb-4">
                        Sistem training untuk memahami Laravel Blade templating dengan Bootstrap 5.
                    </p>
                    <a href="/contact" class="btn btn-primary btn-lg px-5">
                        Get Started
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection
