<div class="sea_part_navigation">
    <div class="selectors">

        <div class="field">
            <label for="resorts_krasnodar">Курорты
                Краснодарского края</label>
            <select id="resorts_krasnodar" onchange="if (this.value) window.location.href = this.value;">
                <option value="">Выбрать курорт Краснодара</option>
                @foreach ($resorts_krasnodar as $resort)
                    <option value="{{ route('sea_resort', ['resort' => $resort->slug]) }}">{{ $resort->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="field">
            <label for="resorts_krim">Курорты Крыма</label>
            <select id="resorts_krim" onchange="if (this.value) window.location.href = this.value;">
                <option value="">Выбрать курорт Крыма</option>
                @foreach ($resorts_krim as $resort)
                    <option value="{{ route('sea_resort', ['resort' => $resort->slug]) }}">{{ $resort->title }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="buttons">

        @if ($showpay)
            <a class="button button_icon button_buss" href="{{ route('kupit_proezd') }}"><i
                    class="ticket_icon"></i><span>Купить
                    проезд</span></a>
        @endif
        <a class="button button_icon" href="{{ route('grafik_zaezdov') }}"><i class="calendar_icon"></i><span>График
                заездов</span></a>
        <a class="button button_icon" href="{{ route('nashi_avtobusi') }}"><i class="bus_icon"></i><span>Наши
                автобусы</span></a>
    </div>
</div>
