@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])

    <div class="section techwix-about-section-07 section-padding">
        <div class="shape-1"></div>
        <div class="container">
            <div class="about-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="about-img">
                                <img src="{{ asset('images/about.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-wrap">
                            <div class="section-title">
                                @if(!empty($fields->sub_title_about))
                                    <h3 class="sub-title">{{$fields->sub_title_about}}</h3>
                                @endif
                                @if(!empty($fields->title_about))
                                    <h2 class="title">{{$fields->title_about}}</h2>
                                @endif
                            </div>
                            @if(!empty($fields->description_about))
                                <p class="text">{!! $fields->description_about !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
