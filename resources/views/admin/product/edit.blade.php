@extends('layouts.admin')

@section('content')

<div class="admin-page">

    {{-- Page Header --}}
    <div class="page-header section-entry">
        <div>
            <h1>Update Product</h1>
            <p class="text-muted">Edit product information</p>
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

            <form action="{{ route('product.update', $product->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    {{-- Category --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="inverter" {{ $product->category === 'inverter' ? 'selected' : '' }}>
                                Inverter Batteries
                            </option>
                            <option value="rickshaw" {{ $product->category === 'rickshaw' ? 'selected' : '' }}>
                                Rickshaw Batteries
                            </option>
                            <option value="bike" {{ $product->category === 'bike' ? 'selected' : '' }}>
                                Bike Batteries
                            </option>
                        </select>
                    </div>

                    {{-- Model --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Model</label>
                        <input type="text"
                               name="model"
                               class="form-control"
                               value="{{ old('model', $product->model) }}"
                               required>
                    </div>

                    {{-- Voltage --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Voltage</label>
                        <input type="text"
                               name="voltage"
                               class="form-control"
                               value="{{ old('voltage', $product->voltage) }}">
                    </div>

                    {{-- Capacity --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Capacity</label>
                        <input type="text"
                               name="capacity"
                               class="form-control"
                               value="{{ old('capacity', $product->capacity) }}">
                    </div>

                    {{-- Warranty --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Warranty</label>
                        <input type="text"
                               name="warranty"
                               class="form-control"
                               value="{{ old('warranty', $product->warranty) }}">
                    </div>

                    {{-- Image --}}
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Product Image</label>
                        <input type="file"
                               name="image"
                               class="form-control"
                               accept="image/*">

                        @if ($product->image)
                            <div class="image-preview mt-2">
                                <img src="{{ asset('storage/product/'.$product->image) }}"
                                     class="img-thumbnail"
                                     width="120">
                            </div>
                        @endif
                    </div>

                </div>

                {{-- Actions --}}
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        Update Product
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
