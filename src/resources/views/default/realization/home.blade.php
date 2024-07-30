<div class="section techwix-brand-section techwix-brand-section-03 techwix-brand-section-04 section-padding">
    <div class="container">
        <div class="brand-wrapper text-center">
            <div class="brand-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($items as $item)
                            @if($item->realization_category_id === 2)
                            <div class="swiper-slide single-brand">
                                @if(!empty($item->lead))
                                    <a href="{!! $item->lead !!}" target="_blank">
                                        <img src="{{ renderImage($item->galleryCover(), 150, 50, 'cover') }}" alt="Logotyp">
                                    </a>
                                @else()
                                    <img src="{{ renderImage($item->galleryCover(), 150, 50, 'cover') }}" alt="Logotyp">
                                @endif
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
