@extends('layouts.app')

@section('title', 'Users List - Training JKN')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Page Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="h3 mb-2">Users Management</h1>
                    <p class="text-muted mb-0">
                        Display data dari table users dengan Blade control structures.
                    </p>
                </div>
            </div>

            <!-- Users Table -->
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td class="fw-semibold">{{ $user->name }}</td>
                                        <td class="text-muted">{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('users.show', $user) }}"
                                                class="btn btn-sm btn-outline-primary me-1">View</a>
                                            <a href="{{ route('users.edit', $user) }}"
                                                class="btn btn-sm btn-outline-success me-1">Edit</a>
                                            <form action="{{ route('users.destroy', $user) }}" method="POST"
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
                                        <td colspan="4" class="text-center py-4 text-muted">
                                            No users found
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
