@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
    <div class="section techwix-about-section-05 section-padding offer-page">
        <div class="container">
            {!! $fields->text1 !!}
        </div>
    </div>

@endsection
