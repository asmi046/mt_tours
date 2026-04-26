<div class="sea_bus_vidget">
    <div class="sea_bus_vidget__wrapper">
        @foreach ($buses as $bus)
            <div class="bus_item">
                <div class="img_wrapper">
                    <img src="{{ Storage::url($bus->gallery[0]['file'] ?? '') }}" alt="{{ $bus->title }}">
                </div>
                <h3>{{ $bus->title }}</h3>
            </div>
        @endforeach
    </div>
    <a href="{{ route('nashi_avtobusi') }}" class="button">Все автобусы</a>
</div>
