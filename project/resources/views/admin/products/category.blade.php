@extends('layouts.admin')
@section('title','Categories')
@section('content')

<div class="container py-5">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- Add Category Form --}}
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Add New Category</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.category.store') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-md-8">
                        <label for="categoryName" class="form-label fw-semibold">Category Name</label>
                        <input type="text" id="categoryName" class="form-control" value="{{ old('name') }}" name="name" placeholder="Enter category name">
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button type="submit" class="btn btn-warning w-100 fw-semibold">
                            <i class="fa fa-plus"></i> Add Category
                        </button>
                    </div>
                    @error('name')
                        <font color="red"><b>{{ $message }}</b></font>
                    @enderror
                </div>
            </form>
        </div>
    </div>

    {{-- Category Table --}}
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Category List</h5>
        </div>
        <div>
            <table class="table table-bordered table-hover align-middle ">
                <thead class="table-warning">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Create</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at->diffforhumans() }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
