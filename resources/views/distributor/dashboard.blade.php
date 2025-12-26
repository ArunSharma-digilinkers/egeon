@extends('layouts.admin')

@section('page-title', 'Distributor Dashboard')

@section('content')
<div class="container-fluid py-4">

    <!-- Welcome Card -->
    <div class="row mb-4">
        <div class="col-12">
             <div class="card shadow-sm border-0 bg-dark text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="mb-1 text-white">
                            Welcome, {{ auth()->user()->name }} 
                        </h4>
                        <p class="mb-0 opacity-75 text-white">
                            Distributor – {{ auth()->user()->state }}
                        </p>
                    </div>
                    <div class="fs-1 opacity-50">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-4 mb-4">

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon bg-success text-white rounded-circle me-3">
                        <i class="bi bi-battery-full"></i>
                    </div>
                    <div>
                        <h6 class="mb-0">Total Warranties</h6>
                        <h4 class="fw-bold">{{ $stats['warranties'] }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon bg-primary text-white rounded-circle me-3">
                        <i class="bi bi-shop"></i>
                    </div>
                    <div>
                        <h6 class="mb-0">Active Dealers</h6>
                        <h4 class="fw-bold">{{ $stats['dealers'] }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon bg-warning text-white rounded-circle me-3">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div>
                        <h6 class="mb-0">Active Warranties</h6>
                        <h4 class="fw-bold">{{ $stats['active'] }}</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Actions -->
    <div class="row g-4">

        <div class="col-lg-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="mb-3">State Warranties</h5>
                    <p class="text-muted">
                        View all battery warranties registered in
                        <strong>{{ auth()->user()->state }}</strong>.
                    </p>
                    <a href="{{ route('distributor.check-warranty') }}"
                       class="btn btn-success w-100">
                        View Warranties
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="mb-3">Check Warranty</h5>
                    <p class="text-muted">
                        Scan or enter battery serial number to verify warranty.
                    </p>
                    <a href="{{ route('distributor.check-warranty') }}"
                       class="btn btn-primary w-100">
                        Check Warranty
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
