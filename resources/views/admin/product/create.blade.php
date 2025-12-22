@extends('layouts.app')

@section('content')

<main class="section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h2>Add Products</h2>
                
                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="container mt-4">
                    @csrf

                    <!-- Category Dropdown -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option disabled selected>Choose Option</option>
                            <option value="inverter">Inverter Batteries</option>
                            <option value="rickshaw">Rickshaw Batteries</option>
                            <option value="bike">Bike Batteries</option>
                        </select>
                    </div>

                    <!-- Model Input -->
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Enter the model name" required>
                    </div>

                    <!-- Voltage Input -->
                    <div class="mb-3">
                        <label for="voltage" class="form-label">Voltage</label>
                        <input type="text" class="form-control" id="voltage" name="voltage" placeholder="Enter the voltage value">
                    </div>

                    <!-- Capacity Input -->
                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacity</label>
                        <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Enter the capacity value">
                    </div>

                    <!-- Warranty Input -->
                    <div class="mb-3">
                        <label for="total_warranty" class="form-label">Warranty</label>
                        <input type="text" class="form-control" id="warranty" name="warranty" placeholder="Enter the warranty period">
                    </div>
                    
                    <!-- Image Upload Input -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
