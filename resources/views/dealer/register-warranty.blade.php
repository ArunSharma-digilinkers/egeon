@extends('layouts.admin')

@section('page-title', 'Register Battery Warranty')

@section('content')
<div class="container-fluid section-entry">

    <div class="row">
        <div class="col-lg-6 mx-auto">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="mb-0">Register Battery Warranty</h4>
                </div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('dealer.warranty.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Customer Name</label>
                            <input type="text"
                                   name="customer_name"
                                   class="form-control"
                                   value="{{ old('customer_name') }}"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Customer Mobile</label>
                            <input type="text"
                                   name="customer_mobile"
                                   class="form-control"
                                   value="{{ old('customer_mobile') }}"
                                   maxlength="10"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Battery Model</label>
                            <input type="text"
                                   name="battery_model"
                                   class="form-control"
                                   value="{{ old('battery_model') }}"
                                   required>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4">
                                Register Warranty
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
