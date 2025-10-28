@extends('layouts.admin')
@section('title','Analytics')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-primary fw-bold">
        <i class="fa fa-chart-line"></i> Business Analytics
    </h2>

    <!-- Summary Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-info shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa fa-shopping-cart fa-2x text-info mb-2"></i>
                    <h5 class="card-title">Total Orders</h5>
                    <h3 class="fw-bold">{{ \App\Models\order::count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-success shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa fa-check-circle fa-2x text-success mb-2"></i>
                    <h5 class="card-title">Completed Orders</h5>
                    <h3 class="fw-bold">{{ \App\Models\order::where('status', 'Completed')->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-warning shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa fa-hourglass-half fa-2x text-warning mb-2"></i>
                    <h5 class="card-title">Pending Orders</h5>
                    <h3 class="fw-bold">{{ \App\Models\order::where('status', 'Pending')->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-primary shadow-sm text-center p-3">
                <div class="card-body">
                    <i class="fa fa-wallet fa-2x text-primary mb-2"></i>
                    <h5 class="card-title">Total Revenue</h5>
                    <h3 class="fw-bold">PKR {{ number_format(\App\Models\order::sum('amount')) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Orders Chart -->
    <div class="card shadow-sm border-info mb-4">
        <div class="card-header bg-info text-white fw-bold">
            <i class="fa fa-chart-bar"></i> Orders Overview
        </div>
        <div class="card-body">
            <canvas id="ordersChart" height="120"></canvas>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="card shadow-sm border-secondary">
        <div class="card-header bg-secondary text-white fw-bold">
            <i class="fa fa-clock"></i> Recent Orders
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Amount (PKR)</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse(\App\Models\order::latest()->take(5)->get() as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ number_format($order->amount) }}</td>
                            <td>
                                @if($order->status == 'Completed')
                                    <span class="badge bg-success">{{ $order->status }}</span>
                                @else
                                    <span class="badge bg-warning text-dark">{{ $order->status }}</span>
                                @endif
                            </td>
                            <td>{{ $order->created_at->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-3">
                                <i class="fa fa-info-circle"></i> No orders yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('ordersChart').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode(
                \App\Models\order::selectRaw('DATE(created_at) as date')
                    ->groupBy('date')
                    ->orderBy('date', 'asc')
                    ->pluck('date')
            ) !!},
            datasets: [{
                label: 'Orders per Day',
                data: {!! json_encode(
                    \App\Models\order::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                        ->groupBy('date')
                        ->orderBy('date', 'asc')
                        ->pluck('count')
                ) !!},
                borderColor: '#0dcaf0',
                backgroundColor: 'rgba(13,202,240,0.2)',
                borderWidth: 2,
                tension: 0.3,
                fill: true,
                pointRadius: 4
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
