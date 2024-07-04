@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page])
<div class="section techwix-blog-grid-section section-padding">
    <div class="container">
        <div class="techwix-blog-grid-wrap">
            <div class="row">
                @foreach($items as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="{{route('realization_category.show.'.$item->id)}}"><img style="height: 320px; object-fit: cover" src="{{ renderImage($item->galleryCover(), 420, 320, 'cover') }}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <h3 class="title"><a href="{{route('realization_category.show.'.$item->id)}}">{{$item->title}} </a></h3>
                                <div class="blog-btn">
                                    <a class="blog-btn-link" href="{{route('realization_category.show.'.$item->id)}}">Zobacz <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
