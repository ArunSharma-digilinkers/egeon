@extends('layouts.app')

@section('content')

<div class="main-wrapper">

   <div class="battery-wrapper section-entry">
    <div class="container">
        <div class="row align-items-center">

            <!-- Product Image -->
            <div class="col-lg-4 col-md-5 col-sm-12 text-center mb-4 mb-lg-0">
                <div class="battery-img-box">
                    <img src="{{ asset('storage/product/' . $product->image) }}" 
                         alt="{{ $product->model }}" class="img-fluid">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-7 offset-lg-1 col-md-7 offset-md-0 col-sm-12">
                <div class="battery-details-box">

                    <h2 class="battery-title">{{ $product->model }}</h2>

                    <div class="row mt-4">

                        <div class="col-md-6">
                            <div class="spec-box">
                                <span>Capacity</span>
                                <strong>{{ $product->capacity }}</strong>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="spec-box">
                                <span>Voltage</span>
                                <strong>{{ $product->voltage }}</strong>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="spec-box highlight">
                                <span>Warranty</span>
                                <strong>{{ $product->warranty }} Months</strong>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


</div>

@endsection