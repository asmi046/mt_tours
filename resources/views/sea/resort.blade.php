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
                <h1>{!! $resort->page_title !!}</h1>
                <p class="subtext">{!! $resort->page_subtitle !!}</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$resort->title"></x-breadcrumbs.main>
        </div>
    </section>

    <x-sea.kurorts-select :resorts="$resorts->toArray()"></x-sea.kurorts-select>

    <section>
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

    <x-contacts-section></x-contacts-section>
@endsection
