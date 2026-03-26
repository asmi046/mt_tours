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
                <h1>Туры за границу в Курске</h1>
                <p class="subtext">Самые актуальные туры и выгодные предложения для вашего отдыха за границей.</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Туры заграницу"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="zagran_way_section">
        <div class="container">

            <div class="tv-search-form tv-moduleid-9976426"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

            <div class="tv-search-form tv-moduleid-9976435"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
            <x-zagran.state-list></x-zagran.state-list>

        </div>
    </section>
@endsection
