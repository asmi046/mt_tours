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
                <h1>{{ $page->title }}</h1>
                <p class="subtext">{{ $page->sub_title }}</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="{{ $page->title }}"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="resort_navigation_section">
        <div class="container">
            <h2>Популярные курорты</h2>
            <x-zagran.resort-list :resorts="$page->resorts"></x-zagran.resort-list>
        </div>
    </section>

    <section class="zagran_way_section_top">
        <div class="container">
            {!! $page->search_script !!}
        </div>
    </section>

    <x-zagran.vidget></x-zagran.vidget>


    <section class="zagran_way_section_top">
        <div class="container">
            <h2>Самые выгодные предложения на туры в {{ $page->name_vp }}</h2>
            <br>
            {!! $page->hot_tours_script !!}

            <div class="text_about_resort text_styles">
                {!! $page->description !!}
            </div>
        </div>
    </section>
    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>
@endsection
