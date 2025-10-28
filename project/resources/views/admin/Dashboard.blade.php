@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <h2 class="fw-bold mb-4 text-primary"><i class="bi bi-speedometer2"></i> Admin Dashboard</h2>

    <div class="row g-4">

        <!-- 🏎 Total Products -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-info">
                <div class="card-body">
                    <i class="bi bi-box-seam display-5 text-info mb-3"></i>
                    <h5 class="card-title fw-bold">Products</h5>
                    <h3 class="fw-bold text-dark">{{ \App\Models\product::count() }}</h3>
                    <p class="text-muted small mb-0">Total listed items</p>
                </div>
            </div>
        </div>

        <!-- 🛒 New Orders -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-success">
                <div class="card-body">
                    <i class="bi bi-cart-check display-5 text-success mb-3"></i>
                    <h5 class="card-title fw-bold">New Orders</h5>
                    <h3 class="fw-bold text-dark">{{ \App\Models\order::where('status','Pending')->count() }}</h3>
                    <p class="text-muted small mb-0">Awaiting fulfillment</p>
                </div>
            </div>
        </div>

        <!-- 👥 Registered Users -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <i class="bi bi-people-fill display-5 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Users</h5>
                    <h3 class="fw-bold text-dark">{{ \App\Models\User::count() }}</h3>
                    <p class="text-muted small mb-0">Registered members</p>
                </div>
            </div>
        </div>

        <!-- 💰 Total Earnings -->
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm border-start border-4 border-danger">
                <div class="card-body">
                    <i class="bi bi-currency-dollar display-5 text-danger mb-3"></i>
                    <h5 class="card-title fw-bold">Total Revenue</h5>
                    <h3 class="fw-bold text-dark">PKR {{ number_format(\App\Models\order::sum('amount')) }}</h3>
                    <p class="text-muted small mb-0">All-time sales</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 📈 Chart / Stats Section -->
    <div class="row mt-4">
        <!-- Sales Chart -->
        <div class="col-md-8">
            <div class="card shadow-sm border-info">
                <div class="card-header bg-info text-white fw-bold">
                    <i class="bi bi-graph-up"></i> Sales Overview
                </div>
                <div class="card-body">
                    <canvas id="salesChart" height="120"></canvas>
                </div>
            </div>
        </div>

        <!-- Quick Summary -->
        <div class="col-md-4">
            <div class="card shadow-sm border-dark">
                <div class="card-header bg-dark text-warning fw-bold">
                    <i class="bi bi-info-circle"></i> Quick Summary
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="bi bi-check-circle text-success"></i> Completed Orders: {{ \App\Models\order::where('status','Completed')->count() }}</li>
                        <li class="mb-2"><i class="bi bi-clock-history text-primary"></i> Pending Orders: {{ \App\Models\order::where('status','Pending')->count() }}</li>
                        <li class="mb-2"><i class="bi bi-cash-stack text-success"></i> Avg. Order Value: PKR {{ number_format(\App\Models\order::avg('amount') ?? 0) }}</li>
                        <li><i class="bi bi-calendar-date text-danger"></i> Latest Order: 
                            @if(\App\Models\order::latest()->first())
                                {{ \App\Models\order::latest()->first()->created_at->format('d M Y') }}
                            @else
                                No orders yet
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(
                \App\Models\order::selectRaw('DATE(created_at) as date')
                    ->groupBy('date')
                    ->orderBy('date','asc')
                    ->pluck('date')
            ) !!},
            datasets: [{
                label: 'Daily Sales (PKR)',
                data: {!! json_encode(
                    \App\Models\order::selectRaw('DATE(created_at) as date, SUM(amount) as total')
                        ->groupBy('date')
                        ->orderBy('date','asc')
                        ->pluck('total')
                ) !!},
                backgroundColor: 'rgba(13,110,253,0.6)',
                borderColor: '#0d6efd',
                borderWidth: 1,
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
});
</script>
@endsection
