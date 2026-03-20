@extends('layouts.all')

@section('main')
    <section id="banner_video_main_page" class="banner_video mini">
        <video autoplay muted loop playsinline poster="{{ asset('video/sea_black.webp') }}" class="_video">
            <source src="{{ asset('video/sea_black.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text">
            <div class="bnr_text">
                <h1>{!! $hotel->title !!}</h1>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$hotel->title" :resort="$hotel->resort"></x-breadcrumbs.main>
        </div>
    </section>
    <x-sea.icon></x-sea.icon>
    <section class="sea_hotel_page_section">
        <div class="container">
            <x-sea.part-navigation></x-sea.part-navigation>
            <div class="cols">
                <div class="col left_col">
                    <swiper-container class="sea-hotel-gallery" init="false">
                        @foreach ($hotel->gallery as $image)
                            <swiper-slide>
                                <img src="{{ $image['img'] }}" alt="{{ $image['title'] }}" loading="lazy"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                            </swiper-slide>
                        @endforeach
                    </swiper-container>

                    <x-sea.one-hotel-map :geoPoint="$hotel->geo"></x-sea.one-hotel-map>
                    <x-sea.bas_shadule :schedule="$hotel->busSchedules"></x-sea.bas_shadule>
                    <div id="alean_calc">
                        <alean-calc :hotels="{{ json_encode($hotel->CID) }}" :hotel_name="{{ json_encode($hotel->title) }}"
                            :resort="{{ json_encode($hotel->resort->alean_id) }}"
                            :resort_name="{{ json_encode($hotel->resort->title) }}"
                            :schedule="{{ json_encode($hotel->busSchedules) }}"
                            :hotel_img="{{ json_encode($hotel->gallery[0]['img']) }}"
                            :way_price="{{ json_encode($wayPrice) }}"
                            :priceup="{{ json_encode($hotel->resort->alean_price_up) }}"></alean-calc>
                    </div>
                </div>
                <div class="col right_col">
                    <div class="hotel_parametrs">
                        @if ($hotel->parameters)
                            @foreach ($hotel->parameters as $parameter)
                                <x-cards.hotel-parametr :item="$parameter"></x-cards.hotel-parametr>
                            @endforeach
                        @endif


                        <div class="parametr">
                            <div class="icon">
                                <svg class="p_icon">
                                    <use xlink:href="#hotel_price"></use>
                                </svg>
                            </div>
                            <div class="text text_styles">
                                <h3>В цену входит:</h3>
                                {!! $hotel->in_price !!}
                                <p class="way_in_price">
                                    🚌 + Проезд на комфортабельном автобусе, <strong>Курск -
                                        {{ $hotel->resort->title }}</strong> в обе стороны.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>

        </div>
    </section>

    <section>
        <div class="container">
            <h2>Смотрите так же</h2>
            <div class="all_tour_wrapper greed">
                @foreach ($upsaleHotels as $item)
                    <x-cards.sea :item="$item"></x-cards.sea>
                @endforeach
            </div>
        </div>
    </section>

    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>
@endsection
