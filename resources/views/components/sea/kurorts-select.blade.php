<section>
    <div class="container kurort_select">
        @foreach ($resorts as $direction => $resorts)
            <a
                href="{{ route('sea_direction', ['direction' => $direction == 'Краснодарский край' ? 'krasnodarskiy-kray' : 'crimea']) }}">
                <h3>{{ $direction }}</h3>
            </a>
            <div class="kurort_select__line">
                @foreach ($resorts as $resort)
                    <a href="{{ route('sea_resort', $resort['slug']) }}" @class([
                        'select_button',
                        'active' => request()->route('resort') === $resort['slug'],
                    ])>
                        {{ $resort['title'] }}
                        @if ($resort['subtitle'])
                            <span><br>{{ $resort['subtitle'] }}</span>
                        @endif
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
