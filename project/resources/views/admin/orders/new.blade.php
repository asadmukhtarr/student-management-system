@extends('layouts.admin')
@section('title','New Orders')
@section('content')

<div class="container py-4">
    <h2 class="mb-4 text-primary"><i class="fa fa-shopping-cart"></i> New Orders</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($orders->count() > 0)
        <div class="table-responsive shadow-sm">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Amount (PKR)</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ number_format($order->amount) }}</td>
                            <td>
                                <span class="badge bg-warning text-dark">{{ $order->status }}</span>
                            </td>
                            <td>{{ $order->created_at->format('d M Y') }}</td>
                            <td>
                                <!-- View Order Modal Button -->
                                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewOrder{{ $order->id }}">
                                    view
                                </button>
                                <!-- Mark Complete -->
                                <a href="{{ route('admin.orders.complete', $order->id) }}" class="btn btn-success btn-sm">
                                    completed
                                </a>
                            </td>
                        </tr>

                        <!-- Modal for Order Details -->
                        <div class="modal fade" id="viewOrder{{ $order->id }}" tabindex="-1" aria-labelledby="viewOrderLabel{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content border-info">
                                    <div class="modal-header bg-info text-white">
                                        <h5 class="modal-title" id="viewOrderLabel{{ $order->id }}">
                                            <i class="fa fa-receipt"></i> Order #{{ $order->id }} Details
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Name:</strong> {{ $order->name }}</p>
                                                <p><strong>Email:</strong> {{ $order->email }}</p>
                                                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Address:</strong> {{ $order->address }}</p>
                                                <p><strong>Status:</strong> <span class="badge bg-warning text-dark">{{ $order->status }}</span></p>
                                                <p><strong>Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
                                            </div>
                                        </div>

                                        <hr>
                                        <h6 class="text-info"><i class="fa fa-list"></i> Order Items</h6>
                                        @php
                                            $items = \App\Models\order_item::where('order_id', $order->id)->get();
                                        @endphp
                                        <table class="table table-sm table-striped mt-2">
                                            <thead>
                                                <tr>
                                                    <th>Product ID</th>
                                                    <th>Quantity</th>
                                                    <th>Total (PKR)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($items as $item)
                                                    <tr>
                                                        <td>{{ $item->product_id }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>{{ number_format($item->total) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="text-end mt-3">
                                            <h5>Total Amount: <span class="text-info">PKR {{ number_format($order->amount) }}</span></h5>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fa fa-times"></i> Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info text-center">
            <i class="fa fa-info-circle"></i> No new orders found.
        </div>
    @endif
</div>

@endsection
