<div class="all_tour_wrapper">
    @foreach ($all_tours as $item)
        <x-tour-card :item="$item"></x-tour-card>
    @endforeach
</div>
