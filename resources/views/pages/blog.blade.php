@extends('layouts.app')

@section('title', 'Mission Batteries Blog | Latest Battery Insights')

@section('description', 'Explore the Mission Batteries blog for expert updates on inverter, solar, and automotive
battery technology, energy tips, and industry innovations in India.')

@section('keywords', '')

@section('content')

<div class="main-wrapper">
 <div class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <h2>Blogs</h2>
            <p>Insights, Updates & Industry Knowledge</p>
        </div>
    </div>
</div>


    <div class="blog-wrapper section-entry">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <a href="{{ route('details.show', $item->slug) }}" class="blog-link">
                        
                        <div class="blog-card">

                            <div class="blog-card-img">
                                <img src="{{ asset('storage/blog/' . $item->featured_image) }}"
                                     alt="{{ $item->post_title }}">
                            </div>

                            <div class="blog-card-content">
                                <span class="blog-date">
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $item->created_at->format('d M Y') }}
                                </span>

                                <h5 class="blog-title">{{ $item->post_title }}</h5>

                                <p class="blog-excerpt">
                                    {!! Str::words($item->blog_post, 22, '...') !!}
                                </p>

                                <span class="read-more">Read More →</span>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection