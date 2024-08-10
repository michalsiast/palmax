@extends('default.layout')
@section('content')
    
    @include('default.subheader', ['pageName' => $item, 'pageName2' => 'Nasze realizacje'])
@if($item->lead === null || $item->lead === "0")
    <div class="section techwix-blog-grid-section section-padding">
        <div class="container">
            <div class="techwix-blog-grid-wrap">
                <div class="row">
                    @foreach($items as $item)
                        @if(!empty($item->lead))
                            <div class="col-lg-4 col-md-6">
                                <div class="single-blog custom-gallery-with-link">
                                    <div class="blog-image">
                                        <a href="{!! $item->lead !!}" target="_blank">
                                            <div class="hover-more">
                                                <img style="width: 60px" src="{{asset('images/magnifier.svg')}}" />
                                            </div>
                                            <img style="height: 270px;object-fit: cover;" src="{{ renderImage($item->galleryCover(), 420, 270, 'cover') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @elseif(empty($item->lead))
                            <div class="col-lg-4 pb-4 gallery">
                                <a href="{{renderImage($item->galleryCover(), 1920, 1080, 'cover')}}">
                                    <img style="width: 100%; object-fit: cover; height: 350px" src="{{ renderImage($item->galleryCover(), 600, 400, 'cover') }}" alt="">
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @elseif($item->lead === "1")
    <div class="section techwix-blog-grid-section section-padding">
        <div class="container">
            <div class="techwix-blog-grid-wrap">
                <div class="row">
                    @foreach($item->gallery->items as $gallery)
                        <div class="col-lg-4 pb-4 gallery">
                            <a href="{{renderImage($gallery->url, 1920, 1080, 'resize')}}">
                                <img style="width: 100%; object-fit: cover; height: 350px" src="{{renderImage($gallery->url, 600, 600, 'fit')}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
