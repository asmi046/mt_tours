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
                <h1>Автобусные туры в {!! $direction->title !!} из Курска</h1>
                <p class="subtext">Туры в {!! $direction->title !!} из Курска по выгодной цене. Отдыхайте без забот с
                    МирТуризма46.</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$direction->title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="sea_part_navigation_section">
        <div class="container">
            <x-sea.part-navigation></x-sea.part-navigation>
        </div>
    </section>

    <x-sea.kurorts-select :resorts="$resorts->toArray()"></x-sea.kurorts-select>

    <section>
        <div class="container">
            <div class="all_tour_wrapper greed">
                @foreach ($hotels as $item)
                    @continue(empty($item['resort']))
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

    <x-contacts-section></x-contacts-section>
@endsection
