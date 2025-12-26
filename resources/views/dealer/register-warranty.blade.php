@extends('layouts.admin')

@section('page-title', 'Register Battery Warranty')

@section('content')
<div class="container-fluid section-entry">
    <div class="row">
        <div class="col-lg-10 mx-auto">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="mb-0">Register Battery Warranty</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('dealer.warranty.store') }}">
                        @csrf

                        <!-- Customer -->
                        <div class="mb-3">
                            <label class="form-label">Customer Name</label>
                            <input type="text" name="customer_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Customer Mobile</label>
                            <input type="text" name="customer_mobile" class="form-control" maxlength="10" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Battery Model</label>
                            <input type="text" name="battery_model" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Warranty Duration</label>
                            <select name="warranty_months" id="warranty_months" class="form-select" required>
                                <option value="">-- Select Warranty --</option>
                                <option value="12">12 Months</option>
                                <option value="24">24 Months</option>
                                <option value="36">36 Months</option>
                                <option value="48">48 Months</option>
                                <option value="60">60 Months</option>
                            </select>
                        </div>

                        <!-- Auto dates -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Warranty Start</label>
                                <input type="text" id="warranty_start" class="form-control" readonly>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Warranty End</label>
                                <input type="text" id="warranty_end" class="form-control" readonly>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100">
                            Register Warranty
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

{{-- JS --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const monthsSelect = document.getElementById('warranty_months');
    const startInput   = document.getElementById('warranty_start');
    const endInput     = document.getElementById('warranty_end');

    const today = new Date();
    startInput.value = today.toISOString().split('T')[0];

    monthsSelect.addEventListener('change', function () {
        if (!this.value) return;

        let endDate = new Date(today);
        endDate.setMonth(endDate.getMonth() + parseInt(this.value));

        endInput.value = endDate.toISOString().split('T')[0];
    });
});
</script>
@endsection
