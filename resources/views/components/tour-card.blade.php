<a href="{{ $item['out_lnk'] ? $item['out_lnk'] : route('tour_page', $item['slug']) }}" data-id="{{ $item['id'] }}"
    class="tour_card">
    <div class="img">
        <img src="{{ Storage::url($item['img']) }}" loading="lazy" alt="{{ $item['title'] }}">

        @if ($item['soldout'])
            <img class="soldout" src="{{ asset('img/soldout.webp') }}">
        @endif

        @if ($item['new_tour'])
            <img class="new_tour" src="{{ asset('img/bages/new-tour.svg') }}">
        @endif

        @if ($item['prices'])
            <div class="label price_label price_label_rus_tours">
                @if (config('sales.show_sale'))
                    от <span class="old_price">{{ $item['prices'][0]['price'] }}</span>
                    {{ $item['prices'][0]['price'] - ($item['id'] == 22 ? 1000 : config('sales.default_sale')) }} ₽
                @else
                    от {{ $item['prices'][0]['price'] }} ₽
                @endif
            </div>
        @endif
    </div>
    <div class="text">
        <h3>{!! $item['title_card'] ?? $item['title'] !!}</h3>
        @if (!empty($item['deycount_text']))
            <p class="label top_label">{{ $item['deycount_text'] }}</p>
        @else
            <p class="label top_label">{{ $item['deycount'] }} {{ echo_days($item['deycount']) }}</p>
        @endif


        <div class="m_data">
            @if ($item['multi_data'])
                @foreach ($item['multi_data'] as $subitem)
                    <p class="label label_blue">
                        {{ date('d.m.Y', strtotime($subitem['start_data'])) }}
                        @if (isset($subitem['soldout']) && $subitem['soldout'])
                            <span class="no_place">Нет мест</span>
                        @endif
                    </p>
                @endforeach
            @else
                <p class="label label_blue">{{ date('d.m.Y', strtotime($item['start_data'])) }}</p>
            @endif
        </div>


        <button class="button">Подробнее</button>
    </div>
</a>
