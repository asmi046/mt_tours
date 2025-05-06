<div class="all_tour_wrapper greed">
    @foreach ($all_tours as $item)
        <x-tour-card :item="$item"></x-tour-card>
    @endforeach
</div>
