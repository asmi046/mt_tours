@extends('layouts.all')

@section('main')
    <section id="banner_video_category" class="banner_video">
        <x-tours-arrow caption="Все отели" link="sea_tour"></x-tours-arrow>
        <video autoplay muted loop playsinline poster="{{ asset('video/sea_black.webp') }}" class="_video">
            <source src="{{ asset('video/sea_black.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text">
            <div class="bnr_text">
                <h1>Автобусные туры на черное море из Курска</h1>
                <p class="subtext">
                    Специально для вас более 300 вариантов размещения в 15 курортных городах Черноморского побережья России.
                    Крым и Краснодарский край ждут Вас!
                </p>
                <br>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
            <div class="dop_param">
                <x-adv></x-adv>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Туры на море из Курска"></x-breadcrumbs.main>
        </div>
    </section>

    <x-sea.kurorts-select :resorts="$resorts->toArray()"></x-sea.kurorts-select>
    <x-sea.all-hotel-map :geoPoints="$geoPoints"></x-sea.all-hotel-map>

    <section id="sea_tour">
        <div class="container">
            <div class="all_tour_wrapper greed">
                @foreach ($hotels as $item)
                    <x-cards.sea :item="$item"></x-cards.sea>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bc_section">
        <div class="container">
            <x-pagination :tovars="$hotels"></x-pagination>
        </div>
    </section>

    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>
@endsection
