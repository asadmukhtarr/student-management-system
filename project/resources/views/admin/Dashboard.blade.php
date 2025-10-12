@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="row g-4">

        <!-- Total Cars -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-warning">
                <div class="card-body">
                    <i class="bi bi-car-front display-5 text-warning mb-3"></i>
                    <h5 class="card-title fw-bold">Total Cars</h5>
                    <h3 class="fw-bold text-dark">120</h3>
                    <p class="text-muted small mb-0">Available for rent</p>
                </div>
            </div>
        </div>

        <!-- New Orders -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <i class="bi bi-cart-check display-5 text-success mb-3"></i>
                    <h5 class="card-title fw-bold">New Orders</h5>
                    <h3 class="fw-bold text-dark">35</h3>
                    <p class="text-muted small mb-0">This week</p>
                </div>
            </div>
        </div>

        <!-- Registered Users -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <i class="bi bi-people-fill display-5 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Users</h5>
                    <h3 class="fw-bold text-dark">542</h3>
                    <p class="text-muted small mb-0">Active members</p>
                </div>
            </div>
        </div>

        <!-- Earnings -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-danger">
                <div class="card-body">
                    <i class="bi bi-currency-dollar display-5 text-danger mb-3"></i>
                    <h5 class="card-title fw-bold">Earnings</h5>
                    <h3 class="fw-bold text-dark">$12,400</h3>
                    <p class="text-muted small mb-0">This month</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Chart / Stats Section -->
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark fw-bold">
                    <i class="bi bi-graph-up"></i> Sales Overview
                </div>
                <div class="card-body text-center text-muted py-5">
                    <p class="mb-0">[ Static Placeholder for Chart ]</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-warning fw-bold">
                    <i class="bi bi-info-circle"></i> Quick Summary
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="bi bi-check-circle text-success"></i> 15 Cars Rented Today</li>
                        <li class="mb-2"><i class="bi bi-clock-history text-primary"></i> 5 Pending Orders</li>
                        <li class="mb-2"><i class="bi bi-gear text-secondary"></i> 3 Maintenance Tasks</li>
                        <li><i class="bi bi-exclamation-circle text-danger"></i> 1 Overdue Return</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
