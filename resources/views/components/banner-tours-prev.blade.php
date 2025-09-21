{{-- <a href="https://www.mirturizma46.ru/turi-na-more" class="item buss_item">
    <img src="{{ asset('img/buss.webp') }}" alt="Автобусные туры на море">
    <div class="overlay"></div>
    <div class="text">
        Автобусные туры на море
    </div>
    <div class="label price_label">
        от 15000 ₽
    </div>
</a> --}}

<a href="{{ route("tour_category", 'new-year') }}" class="item new_year_item">
    <img src="{{ asset('img/new_year/new_head_banner.webp') }}" alt="Новогодние туры от МирТуризма">
    <div class="overlay"></div>
    <div class="text">
        <p>Новый год <br><span class="gold">2025</span><br><span class="smoll">раннее бронирование</span></p>
    </div>
    <div class="label price_label">
        от 2500 ₽
    </div>
</a>
<div class="dop_param__preview">
    @foreach ($tours as $item)
        <a href="{{ route('tour_page', $item->slug) }}" class="item">
            <img src="{{ Storage::url($item->img) }}" alt="{{$item->title}}">
            <div class="overlay"></div>
            <div class="text">
                {{ $item->title_card }}
            </div>
            <div class="label price_label">
                от {{ $item->prices[0]['price'] }} ₽
            </div>
        </a>
    @endforeach
</div>

<div class="dop_param__preview__mobile">
    @foreach ($tours as $item)
        <a href="{{ route('tour_page', $item->slug) }}" class="bable_item">
            <div class="text">
                {{ $item->title_card }}
            </div>
            <div class="label price_label">
                от {{ $item->prices[0]['price'] }} ₽
            </div>
        </a>
    @endforeach
</div>
