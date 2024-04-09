@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <div class="section contact-info-section section-padding-02">
        <div class="container">
            <!-- Contact Info Wrap Start -->
            <div class="contact-info-wrap">
                <div class="row">
                    @if(getConstField('phone'))
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="{{asset('images/info-1.png')}}" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Telefon</h5>
                                    <p><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    @endif
                    @if(getConstField('email'))
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="{{asset('images/info-2.png')}}" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">E-mail</h5>
                                    <p><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    @endif
                    @if(getConstField('company_address') && getConstField('company_post_code') && getConstField('company_city'))
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="{{asset('images/info-3.png')}}" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Lokalizacja</h5>
                                    <p>{{getConstField('company_address')}} <br>
                                        {{getConstField('company_post_code')}} {{getConstField('company_city')}}</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    @endif
                </div>
            </div>
            <!-- Contact Info Wrap End -->
        </div>
    </div>
    <!-- Contact Info End -->
    <div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02">
        <div class="container">
            <!-- Contact Wrap Start -->
            <div class="contact-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <div class="contact-form-wrap">
                                <div class="heading-wrap text-center">
                                    <span class="sub-title"> request a quote</span>
                                    <h3 class="title">How May We Help You!</h3>
                                </div>
                                @include('default.form.contact_form')
                            </div>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
            <!-- Contact Wrap End -->
        </div>
    </div>
        <!-- Contact Map Start -->
    @if(getConstField('google_map_iframe'))
        <div class="section contact-map-section">
            <div class="contact-map-wrap">
                <iframe scrolling="no" marginheight="0" marginwidth="0" src="{{getConstField('google_map_iframe')}}" title="Our Location" aria-label="Our Location" frameborder="0"></iframe>
            </div>
        </div>
    @endif
@endsection
