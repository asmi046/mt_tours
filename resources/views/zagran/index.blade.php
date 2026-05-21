@extends('layouts.all')

@section('main')
    <section id="banner_video_main_page" class="banner_video mini">
        <video autoplay muted loop playsinline poster="{{ asset('video/zagran_all.webp') }}" class="_video">
            <source src="{{ asset('video/zagran_all.mp4') }}" type="video/mp4">
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
            <x-breadcrumbs.main title="Поиск туров On-Line в Курске "></x-breadcrumbs.main>
        </div>
    </section>

    <section class="zagran_way_section">
        <div class="container">

            <div class="tv-search-form tv-moduleid-9976426"></div>
            <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

            <x-zagran.state-list></x-zagran.state-list>

        </div>
    </section>

    <x-zagran.vidget></x-zagran.vidget>

    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>
@endsection
