@props([
    'caption' => 'Все туры',
    'link' => 'tours_cat',
])
<div class="more_tours_caption">
            {{ $caption }}
        </div>
        <a href="#{{ $link }}" class="more_tours yakor">
            <svg class="sprite_icon">
                <use xlink:href="#arrow"></use>
            </svg>
        </a>
