@extends('layouts.app')

@section('content')

<main class="section-entry">
    <div class="container">
        <div class="row">
            <!-- Create Product Button -->
            <div class="admin-btn mt-4 mb-5">
                <a href="{{ route('product.create') }}" class="btn btn-primary">Create a Product</a>
            </div>

            <!-- Displaying Products -->
            @foreach($product as $item)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Product Image -->
                        <img src="{{ asset('storage/product/' . $item->image) }}" alt="Image" class="card-img-top">
                        
                        <!-- Product Details -->
                        <div class="card-body">
                            <p><strong>Category:</strong> {{ $item->category }}</p>
                            <p><strong>Model:</strong> {{ $item->model }}</p>
                        </div>

                        <!-- Action Buttons (Edit/Delete) -->
                        <div class="card-footer">
                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('product.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
