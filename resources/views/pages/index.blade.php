@extends('layouts.app')

@section('content')
<div class="banner-wrap">
    <img src="img/home-banner.jpg" class="img-fluid">
</div>


<div class="hm-info-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h5>Powering the Future with Trusted Energy Solutions</h5>
                <h3>Powering Solar, Industrial & Home Solutions</h3>

                <p>
                    At Egeone Batteries, we specialize in delivering cutting-edge energy storage products built for
                    reliability and performance. Whether you need advanced lithium-ion batteries, robust lead-acid
                    options, or efficient solar battery systems, our range is engineered to meet diverse energy needs
                    meets excellence.
                </p>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="info-box mt-1">
                            <h4><span>10,000+ </span><br>Satisfied Clients</h4>
                            <p>We're proud to serve thousands of businesses across industries with reliable solutions
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="info-box mt-1">
                            <h4><span>24/7 </span><br>Customer Support</h4>
                            <p>Around-the-clock expert assistance whenever you need it.</p>
                        </div>
                    </div>
                    <div class="btn-1">
                        <a href="about">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <img src="img/home-info-img-1.jpg" class="img-fluid br15">
            </div>
        </div>
    </div>
</div>


<div class="cta-wrapper">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left visual space (can be image / stat / empty for balance) -->
            <div class="col-lg-6 col-md-6 col-sm-12 cta-left">
                <img src="{{ asset('img/solar-man.png') }}" alt="" class="img-fluid">
            </div>

            <!-- Right content -->
            <div class="col-lg-6 col-md-6 col-sm-12 cta-content">
                <h5>Let’s Help You Find the Right Battery Solution Today</h5>
                <h3>Ready to Power Your Project with <span>Egeone</span>?</h3>
                <p>
                    Whether you’re building a solar-powered home, upgrading your industrial systems,
                    or simply need reliable backup energy — Egeone has the right battery for you.
                    Our experts are here to guide you every step of the way.
                </p>

                <div class="btn-1">
                    <a href="#">Talk to Our Experts</a>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="why-us-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header-box mb-5">
                    <h5>Why Egeone Batteries ?</h5>
                    <h3>Egeone Powers Progress — With Unmatched Quality, Trust & Innovation</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="why-box-left mb-4">
                    <div class="why-txt">
                        <h5>Eco-Friendly</h5>
                        <p>They keep the air clean and have low heavy toxic metals.</p>
                    </div>
                    <div class="why-img">
                        <img src="img/eco-friendly.png">
                    </div>
                </div>
                <div class="why-box-left mb-4">
                    <div class="why-txt">
                        <h5>Dedicated Expert Team</h5>
                        <p>They keep the air clean and have low heavy toxic metals.</p>
                    </div>
                    <div class="why-img">
                        <img src="img/team-expert.png">
                    </div>
                </div>
                <div class="why-box-left mb-4">
                    <div class="why-txt">
                        <h5>End-to-End Solutions</h5>
                        <p>They keep the air clean and have low heavy toxic metals.</p>
                    </div>
                    <div class="why-img">
                        <img src="img/eco-friendly.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 flex-direction">
                <div class="img-box mb-3">
                    <img src="img/collarge-img.png" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="why-box-right mb-4">
                    <div class="why-img">
                        <img src="img/low-maintenance.png">
                    </div>
                    <div class="why-txt">
                        <h5>Low Maintenance</h5>
                        <p>They keep the air clean and have low heavy toxic metals.</p>
                    </div>
                </div>
                <div class="why-box-right mb-4">
                    <div class="why-img">
                        <img src="img/innovation.png">
                    </div>
                    <div class="why-txt">
                        <h5>Sustainable Innovation</h5>
                        <p>They keep the air clean and have low heavy toxic metals.</p>
                    </div>
                </div>
                <div class="why-box-right mb-4">
                    <div class="why-img">
                        <img src="img/eco-friendly.png">
                    </div>
                    <div class="why-txt">
                        <h5>Reliable Partnerships</h5>
                        <p>They keep the air clean and have low heavy toxic metals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="our-products mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="hm-pro-box">
                    <h3>Our <br>Products</h3>
                    <p>From advanced lithium-ion batteries and grid-scale storage systems to modular power units and
                        smart energy management tools, our diverse product lineup is designed to meet the evolving
                        demands of residential, commercial, industrial, and mobility sectors. At Egeone, we combine
                        innovation, efficiency, and reliability to deliver products that power progress—sustainably and
                        seamlessly.</p>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="pro-box">
                            <img src="img/product-1.png" class="img-fluid">
                            <h5>Lithium Ion Batteries</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, nihil!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="pro-box">
                            <img src="img/product-2.png" class="img-fluid">
                            <h5>Solar Batteries</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit, nihil!</p>
                        </div>
                    </div>
                </div>

                <div class="pro-btn">
                    <a href=""> View All Products </a>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="global-presence section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h5>Global Presence</h5>
                <h3>Powering Progress Across Continents</h3>
                <p>
                    Egeone Energy is a leading force in the global energy landscape, delivering sustainable and
                    innovative energy solutions across multiple continents. With operational hubs in key regions
                    including North America, Europe, Asia, and the Middle East, we’re not just expanding—we’re
                    empowering. Our projects span diverse climates and regulatory environments, reinforcing our
                    commitment to a cleaner, more connected world. By leveraging cutting-edge technology and local
                    partnerships, Egeone Energy ensures consistent, responsible energy access that drives communities
                    and economies forward.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="testimonials-wrapper section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header-box mb-5">
                    <h5>What Our Clients Say</h5>
                    <h3>Hear real stories from the people who trust us to power their success.</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="test-wrap">
                            <div class="test-img-box">
                                <img src="{{ asset('img/client.png') }}" alt="">
                                <div>
                                    <h4>Rahul Sharma</h4>
                                    <span>Solar Project Owner</span>
                                </div>
                            </div>

                            <div class="rating">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <p>
                                Egeone batteries have been extremely reliable for our solar installations.
                                Performance and support are outstanding.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="test-wrap">
                            <div class="test-img-box">
                                <img src="{{ asset('img/client-2.jpg') }}" alt="">
                                <div>
                                    <h4>Khushboo</h4>
                                    <span>Solar Project Owner</span>
                                </div>
                            </div>

                            <div class="rating">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <p>
                                Egeone batteries have been extremely reliable for our solar installations.
                                Performance and support are outstanding.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="test-wrap">
                            <div class="test-img-box">
                                <img src="{{ asset('img/client-3.jpg') }}" alt="">
                                <div>
                                    <h4>Karanveer Singh</h4>
                                    <span>Solar Project Owner</span>
                                </div>
                            </div>

                            <div class="rating">
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star checked"></i>
                                <i class="fa fa-star"></i>
                            </div>

                            <p>
                                Egeone batteries have been extremely reliable for our solar installations.
                                Performance and support are outstanding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection