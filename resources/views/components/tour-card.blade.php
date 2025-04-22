<a href="{{ ($item['out_lnk'])?$item['out_lnk']:route('tour_page', $item['slug']) }}" class="tour_card">
    <div class="img">
        <img src="{{ Storage::url($item['img']) }}" loading="lazy" alt="{{ $item['title'] }}">

        @if ($item['prices'])
            <div class="label price_label">
                от {{ $item['prices'][0]['price'] }} ₽
            </div>
        @endif
    </div>
    <div class="text">
        <h3>{{ $item['title_card'] ?? $item['title']  }}</h3>
        <p class="label">{{ $item['deycount'] }} {{ echo_days($item['deycount']) }}</p>
        <div class="m_data">
            @if ($item['multi_data'])
                @foreach ($item['multi_data'] as $subitem)
                    <p class="label label_blue">
                        {{ date ("d.m.Y", strtotime($subitem['start_data'])) }}
                    </p>
                @endforeach
            @else
                <p class="label label_blue">{{ date ("d.m.Y", strtotime($item['start_data'])) }}</p>
            @endif
        </div>


        <button class="button">Подробнее</button>
    </div>
</a>
