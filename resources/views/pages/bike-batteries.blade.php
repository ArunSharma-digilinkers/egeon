@extends('layouts.app')

@section('content')

<div class="banner-wrap">
    <img src="{{ asset('img/bike-banner.jpg') }}" class="img-fluid">
</div>


<div class="product-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="pro-header-box">
                    <h3>Bike Lithium Batteries</h3>
                    <p> 
                        Our range of Bike delivers an exciting blend of power, performance, and energy efficiency. These vehicles are designed to provide an eco-friendly alternative to traditional fuel-powered bikes, offering superior acceleration and low maintenance costs. With cutting-edge technology, our motorcycles are perfect for riders who want to enjoy the thrill of the road while reducing their carbon footprint.
                    </p>
                </div>
                <div class="why-choose-product">
                    <h3>Why Choose Egeone Bike Lithium Batteries</h3>
                    <p>
                        Egeone bike lithium batteries are a high-performance power solution built for electric two-wheelers, offering faster charging, longer lifespan, and superior energy efficiency compared to traditional lead-acid alternatives. Their lightweight design boosts bike performance and range, while advanced lithium-ion technology ensures thousands of charge cycles with minimal degradation.
                    </p>

                    <p>
                        <span>Longer Life Span :</span> Up to 2,000–3,000+ charge cycles, reducing replacement costs.
                    </p>

                    <p>
                        <span>Faster Charging :</span> Typically 2–4 hours for a full charge—much faster than lead-acid types.
                    </p>

                    <p>
                        <span>High Discharge Rate :</span> Provides better acceleration and performance, especially uphill.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="product-single-wrap mb-5">
    <div class="container">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-4 col-sm-6 mt-4">
                <div class="product-card-wrap">
                    
                    <div class="img-product">
                        <img src="{{ asset('storage/product/' . $item->image) }}" alt="{{ $item->model }}">
                    </div>

                    <div class="product-details">
                        <h4>{{ $item->model }}</h4>
                    </div>

                    <div class="product-detail-btn">
                        <a href="{{ url('bike-battery', $item->id) }}">View Details</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection