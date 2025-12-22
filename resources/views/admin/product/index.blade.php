@extends('layouts.admin')

@section('content')

<div class="admin-page section-entry">

    {{-- Page Header --}}
    <div class="page-header">
        <div>
            <h1>Products</h1>
            <p class="text-muted">Manage all products</p>
        </div>

        <a href="{{ route('product.create') }}" class="btn btn-primary mb-4">
            + Add Product
        </a>
    </div>

    <div class="row g-4">

        @forelse($product as $item)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-card">

                    {{-- Image --}}
                    <div class="product-image">
                        <img src="{{ asset('storage/product/'.$item->image) }}"
                             alt="{{ $item->model }}">
                    </div>

                    {{-- Body --}}
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">
                            {{ ucfirst($item->category) }}
                        </span>

                        <h5 class="product-title">
                            {{ $item->model }}
                        </h5>
                    </div>

                    {{-- Footer --}}
                    <div class="card-footer d-flex justify-content-between align-items-center">

                        <a href="{{ route('product.edit', $item->id) }}"
                           class="btn btn-sm btn-outline-primary">
                            Edit
                        </a>

                        <form action="{{ route('product.destroy', $item->id) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>
                        </form>

                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">
                    No products found.
                </div>
            </div>
        @endforelse

    </div>

</div>

@endsection
