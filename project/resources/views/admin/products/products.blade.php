@extends('layouts.admin')

@section('title', 'All Products')

@section('content')
<div class="card">
    <div class="card-header">
        <i class="fa fa-list"></i> All Products
    </div>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>
                <img src="{{ asset('storage/products/' . $product->image) }}" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;" />
                {{ $product->name }}
            </td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
