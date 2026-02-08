<a href="{{ route('sea_hotel', ['hotel' => $item['slug'], 'resort' => $item['resort']['slug']]) }}"
    data-id="{{ $item['id'] }}" class="tour_card tour_card_sea">
    <div class="img">
        <img src="{{ $item['img'] }}" loading="lazy" alt="{{ $item['title'] }}">

        @if ($item['soldout'])
            <img class="soldout" src="{{ asset('img/soldout.webp') }}">
        @endif

        @if ($item['new_tour'])
            <img class="new_tour" src="{{ asset('img/bages/new-tour.svg') }}">
        @endif

        @if ($item['min_price'])
            <div class="label price_label">
                от {{ $item['min_price'] }} ₽
            </div>
        @endif

        <div class="label resort_label">
            {{ $item['resort']['title'] ?? '' }}
        </div>
    </div>
    <div class="text">
        <h3>{!! $item['title_card'] ?? $item['title'] !!}</h3>

        @if ($item['short_description'])
            <p class="short_description">{{ Str::limit(strip_tags($item['short_description']), 90) }}</p>
        @endif

        @if ($item['sea_distantion'])
            <p class="label top_label">{{ $item['sea_distantion'] }}</p>
        @endif

        @if ($item['numbers_type'])
            <p class="label label_blue">{{ $item['numbers_type'] }}</p>
        @endif

        <button class="button">Подробнее</button>
    </div>
</a>
