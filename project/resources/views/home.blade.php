@extends('layouts.header')
@section('title','Dashboard')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="fw-bold text-primary">
                <i class="fa fa-dashboard"></i> My Dashboard
            </h2>
            <p class="text-muted">
                Welcome back, <strong class="text-danger"> <i class="fa fa-user-circle"></i> {{ Auth::user()->name }}</strong>! Here’s a quick summary of your orders.
            </p>
        </div>
    </div>

    <!-- Order Summary Cards -->
    <div class="row g-4 text-center">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-shopping-bag fa-2x text-primary mb-2"></i>
                    <h6 class="text-muted">Total Orders</h6>
                    <h3 class="fw-bold text-primary">18</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-clock-o fa-2x text-warning mb-2"></i>
                    <h6 class="text-muted">Pending</h6>
                    <h3 class="fw-bold text-warning">4</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-truck fa-2x text-info mb-2"></i>
                    <h6 class="text-muted">Shipped</h6>
                    <h3 class="fw-bold text-info">6</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <i class="fa fa-check-circle fa-2x text-success mb-2"></i>
                    <h6 class="text-muted">Delivered</h6>
                    <h3 class="fw-bold text-success">8</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders Table -->
    <div class="row mt-5">
        <div class="col">
            <div class="card border-0 shadow-sm rounded-0">
                <div class="card-header bg-primary text-white fw-bold">
                    <i class="fa fa-list"></i> Recent Orders
                </div>
                <div">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th><i class="fa fa-hashtag"></i></th>
                                <th><i class="fa fa-id-card"></i> Order ID</th>
                                <th><i class="fa fa-calendar"></i> Date</th>
                                <th><i class="fa fa-info-circle"></i> Status</th>
                                <th><i class="fa fa-money"></i> Total</th>
                                <th><i class="fa fa-cogs"></i> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>#ORD-1023</td>
                                <td>2025-10-05</td>
                                <td><span class="badge bg-warning"><i class="fa fa-clock-o"></i> Pending</span></td>
                                <td>$129.99</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>#ORD-1022</td>
                                <td>2025-10-03</td>
                                <td><span class="badge bg-info text-dark"><i class="fa fa-truck"></i> Shipped</span></td>
                                <td>$249.00</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>#ORD-1019</td>
                                <td>2025-09-30</td>
                                <td><span class="badge bg-success"><i class="fa fa-check"></i> Delivered</span></td>
                                <td>$79.50</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>#ORD-1018</td>
                                <td>2025-09-28</td>
                                <td><span class="badge bg-success"><i class="fa fa-check"></i> Delivered</span></td>
                                <td>$56.40</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary btn-sm">
                        <i class="fa fa-list-alt"></i> View All Orders
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
