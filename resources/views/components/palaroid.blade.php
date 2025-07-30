@props(['load' => 'lazy', 'item'])

<div class="palaroid">
    <a data-fslightbox="page-galery" href="{{ Storage::url($item['img']) }}" class="photo_wrap">
        <img loading="{{ $load }}"  src="{{ Storage::url($item['img']) }}" alt="{{ $item['title'] }}">
    </a>
    <div class="text">
        {{ $item['title'] }}
    </div>
</div>
