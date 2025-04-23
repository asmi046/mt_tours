<div class="cat_banner_buttons">
    @foreach ($buttons as $item)
        <a href="{{ route('tour_category', $item->slug) }}" class="banner_button">
            <div class="icon">
                @if ($item->icon)
                    <img src="{{ Storage::url($item->icon) }}"/>
                @else
                    <img src="{{asset('img/icon/white_button_bus.svg') }}"/>
                @endif
            </div>
            <span>{{ $item->name }}</span>
        </a>
    @endforeach

</div>
