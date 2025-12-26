@extends('layouts.admin')

@section('page-title', 'Dealer Dashboard')

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
                            Authorized Dealer – {{ auth()->user()->state }}
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
                    <div class="icon bg-primary text-white rounded-circle me-3">
                        <i class="bi bi-battery-charging"></i>
                    </div>
                    <div>
                        <h6 class="mb-0">Total Registrations</h6>
                        <h4 class="fw-bold">{{ $stats['total'] }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon bg-success text-white rounded-circle me-3">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <div>
                        <h6 class="mb-0">Active Warranties</h6>
                        <h4 class="fw-bold">{{ $stats['active'] }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center">
                    <div class="icon bg-danger text-white rounded-circle me-3">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <div>
                        <h6 class="mb-0">Expired</h6>
                        <h4 class="fw-bold">{{ $stats['expired'] }}</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Actions -->
    <div class="row g-4">

        <div class="col-lg-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="mb-3">Register Warranty</h5>
                    <p class="text-muted">
                        Register a new battery warranty for your customer.
                    </p>
                    <a href="{{ route('dealer.warranty.create') }}" class="btn btn-primary w-100">
                        Register New Warranty
                    </a>
                </div>
            </div>
        </div>



    </div>

</div>
@endsection