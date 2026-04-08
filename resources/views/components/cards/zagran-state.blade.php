<a href="{{ route('zagran.destination', $item->slug) }}" class="zagran_state_item">
    <img loading="lazy" src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    <div class="label">от {{ (int) $item->min_price }} ₽</div>
    <div class="zagran_state_item_text">
        <h3>{{ $item->title }}</h3>
        <p class="resorts">{{ $item->resorts_list }}</p>
    </div>
    <div class="shadow"></div>
</a>
