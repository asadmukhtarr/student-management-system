@extends('layouts.admin')
@section('title', 'Manage Admin Users')
@section('content')
<div class="container mt-4">
    <div class="row">
        {{-- Left column: Add/Edit Form --}}
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        {{ isset($user) ? 'Edit Admin User' : 'Add Admin User' }}
                    </h5>
                </div>
                <div class="card-body">
                    @if(isset($user))
                        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @method('PUT')
                    @else
                        <form action="{{ route('admin.users.store') }}" method="POST">
                    @endif
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" 
                                   value="{{ $user->name ?? old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" 
                                   value="{{ $user->email ?? old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password {{ isset($user) ? '(Leave blank to keep current)' : '' }}</label>
                            <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" {{ isset($user) ? '' : 'required' }}>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            {{ isset($user) ? 'Update User' : 'Add User' }}
                        </button>

                        @if(isset($user))
                            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary w-100 mt-2">Cancel Edit</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        {{-- Right column: User list --}}
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Admin Users List</h5>
                </div>
                <div>
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-bordered table-striped align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $usr)
                                <tr>
                                    <td>{{ $usr->id }}</td>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->created_at->diffforhumans() }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.edit', $usr->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.users.destroy', $usr->id) }}" method="POST" style="display:inline;">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No admin users found.</td>
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
