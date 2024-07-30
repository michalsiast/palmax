@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

@include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])

<!-- About Start -->
@if($fields->about_sub_title || $fields->about_title || $fields->about_content)
    <div class="section techwix-about-section-05 section-padding">
        <div class="container">
            <!-- About Wrap Start -->
            <div class="about-wrap">
                @if($fields->about_sub_title || $fields->about_title)
                    <div class="section-title text-center">
                        <h3 class="sub-title">{{$fields->about_sub_title}}</h3>
                        <h2 class="title">{{$fields->about_title}}</h2>
                    </div>
                @endif
                <!-- About Content Wrap Start -->
                <div class="about-content-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Image Wrap Start -->
                            <div class="about-img-wrap">
                                <div class="about-img about-img-big">
                                    <img src="{{asset('images/about_us_1.jpeg')}}" style="width: 411px; height: 508px;object-fit: cover" alt="">
                                </div>
                                <div class="about-img about-img-sm">
                                    <img src="{{asset('images/about_us_2.jpeg')}}" style="width: 301px; height: 323px;object-fit: cover" alt="">
                                    <div class="shape-01"></div>
                                </div>
                            </div>
                            <!-- About Image Wrap End -->
                        </div>
                        <div class="col-lg-6" style="display: flex; align-items: center">
                            <!-- About Content Start -->
                            @if($fields->about_content)
                                <div class="about-content">
                                    <p class="text">{!! $fields->about_content !!}</p>
                                </div>
                            @endif
                            <!-- About Content End -->
                        </div>
                    </div>
                </div>
                <!-- About Content Wrap End -->
            </div>
            <!-- About Wrap End -->
        </div>
    </div>
@endif
<!-- About End -->

<!-- Counter Start -->
<div class="section techwix-counter-section-03" style="background-image: url({{asset('images/counter-bg.jpg')}});">
    <div class="container">
        <div class="counter-wrap">
            <div class="row">
                <!-- Licznik 1 -->
                @if(!empty($fields->statistics_number_1) && !empty($fields->statistics_header_1))
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-counter-02 text-center">
                            <span><span class="counter">{{$fields->statistics_number_1}}</span>{{$fields->statistics_unit_1}}</span>
                            <p>{{$fields->statistics_header_1}}</p>
                        </div>
                    </div>
                @endif

                <!-- Licznik 2 -->
                @if(!empty($fields->statistics_number_2) && !empty($fields->statistics_header_2))
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-counter-02 text-center">
                            <span><span class="counter">{{$fields->statistics_number_2}}</span>{{$fields->statistics_unit_2}}</span>
                            <p>{{$fields->statistics_header_2}}</p>
                        </div>
                    </div>
                @endif

                <!-- Licznik 3 -->
                @if(!empty($fields->statistics_number_3) && !empty($fields->statistics_header_3))
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-counter-02 text-center">
                            <span><span class="counter">{{$fields->statistics_number_3}}</span>{{$fields->statistics_unit_3}}</span>
                            <p>{{$fields->statistics_header_3}}</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
<!-- Counter End -->
<div class="section techwix-choose-us-section section-padding"
     style="background-image: url({{asset('images/choose-us-bg3.jpg')}});">
    <div class="container" style="max-width: 1450px;">
        <!-- Choose Us Wrap Start -->
        <div class="choose-us-wrap">
            @if($fields->why_us_subtitle || $fields->why_us_title)
                <div class="section-title text-center">
                    <h3 class="sub-title">{{$fields->why_us_subtitle}}</h3>
                    <h2 class="title">{{$fields->why_us_title}}</h2>
                </div>
            @endif
            <div class="choose-us-content-wrap">
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-5">
                    @include('default.article.home')
                </div>
            </div>
        </div>
        <!-- Choose Us Wrap End -->
    </div>
</div>
<!-- Testimonial Start -->
@if(!empty($fields->testimonial_subtitle) || !empty($fields->testimonial_title))
    <div class="section bg-cover techwix-testimonial-section-02 techwix-testimonial-section-03 section-padding"
         style="background-image: url({{asset('images/testimonial-bg.jpg')}});">
        <div class="container">
            <!-- Testimonial Wrap Start -->
            <div class="testimonial-wrap-02">
                <div class="section-title text-center">
                    @if(!empty($fields->testimonial_subtitle))
                        <h3 class="sub-title">{{$fields->testimonial_subtitle}}</h3>
                    @endif
                    @if(!empty($fields->testimonial_title))
                        <h2 class="title">{{$fields->testimonial_title}}</h2>
                    @endif
                </div>
                @if(!empty($reviews))
                    <div class="testimonial-content-wrap-02">
                        <div class="swiper-container testimonial-02-active">
                            <div class="swiper-wrapper">
                                @foreach($reviews as $review)
                                <div class="swiper-slide">
                                    <div class="single-testimonial-02">
                                        <div class="testimonial-content">
                                            <img src="{{asset('images/testi-icon.png')}}" alt="">
                                            <p>{{ $review['text'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                @endif
            </div>
            <!-- Testimonial Wrap End -->
        </div>
    </div>
    <!-- Testimonial End -->
@endif
    @include('default.realization.home')
@endsection
