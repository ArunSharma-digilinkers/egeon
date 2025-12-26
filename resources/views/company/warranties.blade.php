@extends('layouts.admin')

@section('page-title', 'All Warranties')

@section('content')
<div class="container-fluid mt-3">

    <h4 class="mb-3">All Battery Warranties</h4>

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
                @foreach($warranties as $warranty)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="txt-cap">{{ strtolower($warranty->dealer->name) ?? '-' }}</td>
                        <td class="txt-cap">
                            {{ strtolower($warranty->customer_name) }}<br>
                            <small>{{ strtolower($warranty->customer_mobile) }}</small>
                        </td>
                        <td class="txt-cap">{{ strtolower($warranty->battery_model) }}</td>
                        <td class="txt-cap">{{ strtolower($warranty->serial_number) }}</td>
                        <td>
                            <svg id="barcode-{{ $warranty->id }}"></svg>
                        </td>
                        <td>
                            {{ $warranty->warranty_start->format('d M Y') }} → 
                            {{ $warranty->warranty_end->format('d M Y') }}
                        </td>
                        <td>
                            @if(now()->lte($warranty->warranty_end))
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Expired</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

{{-- JsBarcode --}}
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
