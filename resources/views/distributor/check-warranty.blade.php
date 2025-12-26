@extends('layouts.admin')

@section('page-title', 'State Warranties')

@section('content')
<div class="container-fluid mt-3">

    <h4 class="mb-3">Warranties in {{ auth()->user()->state }}</h4>

    {{-- Search form --}}
    <form method="GET" action="{{ route('distributor.check-warranty') }}" class="mb-3">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text"
                       name="serial_number"
                       value="{{ request('serial_number') }}"
                       class="form-control"
                       placeholder="Search by Serial Number">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100">Search</button>
            </div>
        </div>
    </form>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Dealer</th>
                        <th>Customer</th>
                        <th>Battery Model</th>
                        <th>Serial Number</th>
                        <th>Barcode</th>
                        <th>Warranty</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($warranties as $warranty)
                    <tr>
                        <td class="txt-cap">{{ strtolower($loop->iteration) }}</td>
                        <td class="txt-cap">{{ $warranty->dealer->name ?? '-' }}</td>
                        <td class="txt-cap">
                            {{ strtolower($warranty->customer_name) }}<br>
                            <small>{{ strtolower($warranty->customer_mobile) }}</small>
                        </td>
                        <td class="txt-cap">{{ strtolower($warranty->battery_model) }}</td>
                        <td class="txt-cap">{{ strtolower($warranty->serial_number) }}</td>
                        <td class="txt-cap">
                            <svg id="barcode-{{ $warranty->id }}"></svg>
                        </td>
                        <td class="txt-cap">
                            {{ $warranty->warranty_start->format('d M Y') }} → 
                            {{ $warranty->warranty_end->format('d M Y') }}
                        </td>
                        <td class="txt-cap">
                            @if(now()->lte($warranty->warranty_end))
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Expired</span>
                            @endif
                        </td>
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

{{-- Barcode --}}
<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
<script>
@foreach($warranties as $warranty)
    JsBarcode("#barcode-{{ $warranty->id }}", "{{ $warranty->serial_number }}", {
        format: "CODE128",
        width: 2,
        height: 40,
        displayValue: true
    });
@endforeach
</script>

@endsection
