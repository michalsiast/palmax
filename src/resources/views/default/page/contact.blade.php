@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
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
                                    <img src="{{asset('images/logo.png')}}" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Dane firmy</h5>
                                    <p>{{getConstField('page_title')}} {{getConstField('company_name')}}</p>
                                    <p>NIP: {{getConstField('company_nip')}}</p>
                                    <p>Nr. konta: <span style="white-space:nowrap">{{getConstField('bank_account_number')}}</span></p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    @endif
                    @if(getConstField('email') || getConstField('phone'))
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <img src="{{asset('images/info-1.png')}}" alt="">
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Dane kontaktowe</h5>
                                    <p><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></p>
                                    <p><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></p>
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
                                    <p><a href="{{getConstField('google_map')}}">{{getConstField('company_address')}} <br>
                                            {{getConstField('company_post_code')}} {{getConstField('company_city')}}</a></p>
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
                                @if($fields->sub_title_contact || $fields->title_contact)
                                    <div class="heading-wrap text-center">
                                        @if($fields->sub_title_contact)
                                            <span class="sub-title">{{$fields->sub_title_contact}}</span>
                                        @endif
                                        @if($fields->title_contact)
                                            <h3 class="title">{{$fields->title_contact}}</h3>
                                        @endif
                                    </div>
                                @endif
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
