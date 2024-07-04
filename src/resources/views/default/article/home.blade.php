@foreach($items as $item)
    <div class="" style="display: flex; align-items: stretch">
        <div class="choose-us-item-02">
            <div class="choose-us-img">
                <img style="width: 50px;" src="{{ renderImage($item->galleryCover(), 50, 50, 'cover') }}" alt="">
            </div>
            <div class="choose-us-content">
                <h3 class="title">{{$item->title}}</h3>
                {!! $item->text !!}
            </div>
        </div>
    </div>
@endforeach
