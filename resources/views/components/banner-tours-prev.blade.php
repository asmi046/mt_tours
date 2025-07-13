<a href="https://www.mirturizma46.ru/turi-na-more" class="item buss_item">
    <img src="{{ asset('img/buss.webp') }}" alt="Автобусные туры на море">
    <div class="overlay"></div>
    <div class="text">
        Автобусные туры на море
    </div>
    <div class="label price_label">
        от 15000 ₽
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
