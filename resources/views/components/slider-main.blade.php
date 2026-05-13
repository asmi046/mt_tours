@if ($slides->isNotEmpty())
    <div class="slider_main">
        <swiper-container class="banner-main-slider" init="false">
            @foreach ($slides as $slide)
                <swiper-slide>
                    <a href="{{ $slide->link }}" class="banner-main-slider__slide">
                        <img src="{{ Storage::url($slide->image) }}" alt="{{ $slide->title }}"
                            class="banner-main-slider__img">
                        <div class="banner-main-slider__overlay"></div>
                        <div class="banner-main-slider__title">
                            <h2>{{ $slide->title }}</h2>
                            <a href="#" class="button">
                                Подробнее</a>
                        </div>
                    </a>
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>
@endif
