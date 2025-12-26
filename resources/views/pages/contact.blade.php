@extends('layouts.app')

@section('content')

<div class="banner-wrap">
    <img src="{{ asset('img/contact-banners.jpg') }}" class="img-fluid">
</div>

<section class="form-section section-entry">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-12 mb-4">
                <div class="contact-form-wrap">
                    <div class="section-title">
                        <h1>Get in Touch</h1>
                    </div>
                    <div class="mrb30">
                        <p>
                            Please fill out this quick form and we will be in touch with you.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <form class="contact-form" action="mail/mail.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mrb-small contact-form__group">
                                            <label class="contact-form__label" for="inputName">First
                                                Name</label>
                                            <input type="text" class="form-control contact-form__input"
                                                id="inputName" name="name"
                                                placeholder="Enter your first name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mrb-small contact-form__group">
                                            <label class="contact-form__label" for="inputMail">Last
                                                Name</label>
                                            <input type="email" class="form-control contact-form__input"
                                                id="inputMail" name="name"
                                                placeholder="Enter your last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mrb-small contact-form__group">
                                            <label class="contact-form__label" for="inputPhone">Mobile
                                                Number</label>
                                            <input type="text" class="form-control contact-form__input"
                                                id="inputPhone" name="phone"
                                                placeholder="Enter your mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group mrb-small contact-form__group">
                                            <label class="contact-form__label" for="inputPhone">Your
                                                Email</label>
                                            <input type="text" class="form-control contact-form__input"
                                                id="inputPhone" name="email" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group mrb-small contact-form__group">
                                            <label class="contact-form__label" for="inputMsg">Your
                                                Message</label>
                                            <textarea class="form-control contact-form__textarea"
                                                id="inputMsg" name="message"
                                                placeholder="Write your message" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-form__button">
                                    <button type="submit" class="btn c-btn"
                                        name="contact_submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12">
                <h5>Contact Our Team</h5>
                <h3>Reach out for support, collaboration, or inquiries.</h3>
                <p>We're available to assist with all your business needs. Fill out the form or use our direct contact details and we’ll be happy to help.</p>

                <div class="cont-box mb-3">
                    <div class="cont-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="cont-txt">
                        <p>84180-00440</p>
                    </div>
                </div>
                 <div class="cont-box mb-3">
                    <div class="cont-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="cont-txt">
                        <p>011-567-8939</p>
                    </div>
                </div>
                 <div class="cont-box mb-3">
                    <div class="cont-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="cont-txt">
                        <p>info@egeonbatteries.com</p>
                    </div>
                </div>

                <div class="cont-box mb-3">
                    <div class="cont-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="cont-txt">
                        <p>F-113, ROYAL CITY AURANGABAD JAGIR, Bijnor, PO: Bijnaur, DIS1: Lucknow, Uttar Pradesh - 226002</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

<div class="map-wrapper">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55627.40010374778!2d78.09823948358257!3d29.378705962488176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390bee6a893390f9%3A0x9bbd471db27ea08f!2sBijnor%2C%20Uttar%20Pradesh%20246701!5e0!3m2!1sen!2sin!4v1765364292311!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



@endsection