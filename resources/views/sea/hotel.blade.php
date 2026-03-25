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
                <h1 data-pid="{{ $hotel->id }}">{!! $hotel->title !!}</h1>
                <p class="subtext">{!! $hotel->short_description !!}</p>
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

            <x-sea.part-navigation :showpay="false"></x-sea.part-navigation>

            <div class="cols">
                <div class="col left_col">
                    <swiper-container class="sea-hotel-gallery" init="false">
                        @foreach ($hotel->gallery as $image)
                            <swiper-slide>
                                <img src="{{ $image }}" alt="{{ $hotel->title }}"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                            </swiper-slide>
                        @endforeach
                    </swiper-container>
                    <div class="calc" id="main_calc">
                        <h2>Рассчитать стоимость</h2>
                        <main-calc :hotelid="{{ $hotel->id }}" :hotel_name="'{{ $hotel->title }}'"
                            :resort_name="'{{ $hotel->resort->name }}'" :hotel_img="'{{ $hotel->img }}'"
                            :room-types="{{ json_encode($hotel->number_prices) }}"
                            :schedule="{{ json_encode($hotel->busSchedules) }}"></main-calc>
                    </div>
                    <x-sea.one-hotel-map :geoPoint="$hotel->geo"></x-sea.one-hotel-map>
                    <x-sea.bas_shadule :schedule="$hotel->busSchedules"></x-sea.bas_shadule>
                    <x-sea.hotel-price :prices="$hotel->number_prices" :befor5="$hotel->before_5_price" :before11="$hotel->before_12_price"></x-sea.hotel-price>
                </div>
                <div class="col right_col">
                    <div class="hotel_parametrs">
                        @foreach ($hotel->parameters as $parameter)
                            <x-cards.hotel-parametr :item="$parameter"></x-cards.hotel-parametr>
                        @endforeach

                        <div class="parametr">
                            <div class="icon">
                                <svg class="p_icon">
                                    <use xlink:href="#hotel_price"></use>
                                </svg>
                            </div>
                            <div class="text">
                                <h3>В цену входит:</h3>
                                {!! $hotel->in_price !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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
