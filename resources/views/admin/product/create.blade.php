@extends('layouts.admin')

@section('content')

<div class="admin-page section-entry">

    {{-- Page Header --}}
    <div class="page-header">
        <div>
            <h1>Add Product</h1>
            <p class="text-muted">Create a new product</p>
        </div>

        <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">
            ← Back to Products
        </a>
    </div>

    {{-- Card --}}
    <div class="card admin-card">

        <div class="card-body">

            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('product.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <div class="row">

                    {{-- Category --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option disabled selected>Choose category</option>
                            <option value="inverter">Inverter Batteries</option>
                            <option value="rickshaw">Rickshaw Batteries</option>
                            <option value="bike">Bike Batteries</option>
                        </select>
                    </div>

                    {{-- Model --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Model</label>
                        <input type="text"
                               name="model"
                               class="form-control"
                               placeholder="Enter model name"
                               required>
                    </div>

                    {{-- Voltage --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Voltage</label>
                        <input type="text"
                               name="voltage"
                               class="form-control"
                               placeholder="e.g. 12V">
                    </div>

                    {{-- Capacity --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Capacity</label>
                        <input type="text"
                               name="capacity"
                               class="form-control"
                               placeholder="e.g. 150Ah">
                    </div>

                    {{-- Warranty --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Warranty</label>
                        <input type="text"
                               name="warranty"
                               class="form-control"
                               placeholder="e.g. 36 Months">
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Product Image</label>
                        <input type="file"
                               name="image"
                               class="form-control"
                               accept="image/*"
                               required>
                    </div>

                </div>

                {{-- Actions --}}
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        Save Product
                    </button>

                    <a href="{{ route('product.index') }}"
                       class="btn btn-light ms-2">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
