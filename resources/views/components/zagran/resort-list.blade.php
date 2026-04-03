<div class="zagran-resort-list">
    @foreach ($resorts as $item)
        <a href="{{ route('zagran.resort', ['state' => $item->destination->slug, 'resort' => $item->slug]) }}"
            @class([
                'button',
                'zagran-resort-list__item',
                'active' => request()->route('resort') === $item->slug,
            ])>
            {{ $item->resort_name }}
        </a>
    @endforeach
</div>
