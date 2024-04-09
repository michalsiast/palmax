@if($items->count() > 0)
    <ul class="main-menu">
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                }
                else {
                    $url = url()->to($item->url);
                }

                if($item->target) {
                    $target = $item->target;
                }

                $isActive = request()->fullUrlIs($url);
            @endphp
            <li class="{{ $isActive ? 'active-menu' : '' }}">
                <a href="{{$url}}">
                    {{$item->label}}
                </a>
                @if($item->navItems->count() > 0)
                    <ul class="sub-menu">
                        @foreach($item->navItems as $subItem)
                            @php
                                $isActiveSub = false;
                                $urlSub = null;
                                $targetSub = '_self';
                                if($subItem->page) {
                                    $urlSub = route($subItem->page->type);
                                }
                                else {
                                    $urlSub = url()->to($subItem->url);
                                }

                                if($subItem->target) {
                                    $targetSub = $subItem->target;
                                }

                                $isActiveSub = request()->fullUrlIs($urlSub);
                            @endphp
                            <li class="{{ $isActiveSub ? 'active' : '' }}">
                                <a href="{{$urlSub}}">
                                    <span>{{ $subItem->label }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
@endif
