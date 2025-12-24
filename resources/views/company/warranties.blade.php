@extends('layouts.admin')

@section('page-title', 'All Warranties')

@section('content')
<div class="container-fluid mt-3">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">All Warranties</h4>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Dealer</th>
                        <th>Customer Name</th>
                        <th>Mobile</th>
                        <th>Battery Model</th>
                        <th>Serial Number</th>
                        <th>State</th>
                        <th>Registered At</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($warranties as $warranty)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $warranty->dealer->name ?? '-' }}</td>
                        <td>{{ $warranty->customer_name }}</td>
                        <td>{{ $warranty->customer_mobile }}</td>
                        <td>{{ $warranty->battery_model }}</td>
                        <td>{{ $warranty->serial_number ?? '-' }}</td>
                        <td>{{ $warranty->state }}</td>
                        <td>{{ $warranty->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            No warranties found.
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection
