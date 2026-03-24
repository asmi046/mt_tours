<div class="zagran_state_list">
    @foreach ($state_list as $item)
        <article class="zagran_state_list_item">
            <x-cards.zagran-state :item="$item"></x-cards.zagran-state>
        </article>
    @endforeach
</div>
