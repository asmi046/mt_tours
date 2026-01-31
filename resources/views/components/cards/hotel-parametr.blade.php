<div class="parametr">
    <div class="icon">
        @switch($item['title'])
            @case('Расположение:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_rasp"></use>
                </svg>
            @break

            @case('Территория:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_territ"></use>
                </svg>
            @break

            @case('Размещение:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_razm"></use>
                </svg>
            @break

            @case('В номерах:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_razvl"></use>
                </svg>
            @break

            @case('Питание:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_pit"></use>
                </svg>
            @break

            @case('Развлечения:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_razvl"></use>
                </svg>
            @break

            @case('Пляж:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_plazg"></use>
                </svg>
            @break

            @case('Инфраструктура:')
                <svg class="p_icon">
                    <use xlink:href="#hotel_infr"></use>
                </svg>
            @break

            @default
                <svg class="p_icon">
                    <use xlink:href="#hotel_territ"></use>
                </svg>
        @endswitch
    </div>
    <div class="text">
        <h3>{!! $item['title'] !!}</h3>
        {!! $item['description'] !!}
    </div>
</div>
