<div class="section techwix-hero-section-05">
    <div class="techwix-hero-wrap owl-carousel owl-theme" style="background-image: url({{asset('images/hero-bg.jpg')}});">
    @foreach($rotator->gallery->items as $item)
        <div class="container item">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">

                        <h2 class="title" data-aos="fade-up" data-aos-delay="800">{{$item->name}}</h2>
                        <p data-aos="fade-up" data-aos-delay="900">{!! $item->text !!}</p>
                        <div class="hero-btn" data-aos="fade-up" data-aos-delay="1000">
                            <a class="btn" style="margin-top: 0px" href="{{route('realization_category.index')}}">Zobacz więcej</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Hero Image Start -->
                    <div class="hero-images">
                        <div class="images">
                            <img src="{{renderImage($item->url, 900, 700, `fit`)}}" alt="">
                        </div>
                    </div>
                    <!-- Hero Image ennd -->
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@push('scripts.body.bottom')
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                nav: {{$rotator->arrows ? 'true' : 'false'}},
                dots: {{$rotator->pager ? 'true' : 'false'}},
                autoplay: true,
                autoplayTimeout: {{$rotator->time ?? 3000}},
                smartSpeed:  {{$rotator->speed ?? 500}},
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            });
        });
    </script>
@endpush
