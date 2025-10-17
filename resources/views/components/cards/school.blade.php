<div class="school_card">
    @if ($item->img)
        <a href="{{ Storage::url($item->img) }}" data-caption="{{ $item->title }}" data-fslightbox="page-galery" class="school_card_img">
            <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
        </a>
    @endif
    <div class="school_card_content">
        <h2 class="school_card_title">{!! $item->title !!}</h2>
        <p class="school_card_description">{!! $item->description !!}</p>
    </div>
</div>
