@extends('layouts.app')

@section('content')

<div class="banner-wrap">
    <img src="{{ asset('img/rickshaw-banner.jpg') }}" class="img-fluid">
</div>


<div class="product-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="pro-header-box">
                    <h3>Rickshaw Lithium Batteries</h3>
                    <p>
                        Egeone rickshaw lithium batteries are a preferred choice for electric rickshaws due to their high energy density, lightweight structure, and long cycle life. Unlike traditional lead-acid batteries, they offer faster charging, deeper discharge capabilities, and significantly longer operational hours—ideal for daily commercial use. Their compact design helps reduce vehicle weight, improving mileage and efficiency.</p>
                </div>
                <div class="why-choose-product">
                    <h3>Why Choose Egeone Rickshaw Batteries</h3>
                    <p>
                        Egeone tall tubular batteries are a popular choice for home and commercial power backup systems due to their long lifespan, deep discharge handling, and superior performance in high-temperature environments. Designed to endure frequent power outages, they offer fast charging, low maintenance, and consistent power output, making them ideal for inverters and solar setups.
                    </p>

                    <p>
                        <span>Longer Life Span :</span>  Lasts up to 3,000–4,000 charge cycles — much more than lead-acid alternatives.
                    </p>

                    <p>
                        <span>Faster Charging :</span>  Saves time for rickshaw operators with quick recharge, typically in 3–4 hours.
                    </p>

                    <p>
                        <span>Improved Safety :</span>  Built-in Battery Management System (BMS) prevents overcharging, short circuits, and overheating.
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
                        <a href="{{ url('rickshaw-battery', $item->id) }}">View Details</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection