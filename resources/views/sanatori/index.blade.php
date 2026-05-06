@extends('layouts.all')

@section('main')
    <section id="banner_video_main_page" class="banner_video mini">
        <video autoplay muted loop playsinline poster="{{ asset('img/main-video-obl.webp') }}" class="_video">
            <source src="{{ asset('img/exkursionka.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text">
            <div class="bnr_text">
                <h1>Отдых в санаториях России</h1>
                <p class="subtext">Наши специалисты собрали для Вас самые актуальные и выгодные предложения по санаторному
                    отдыху. У нас вы найдете лучшие путевки в санатории Кавказа и Черноморского побережья.</p>
                <br>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="news_section">
        <div class="container">
            <script type="text/javascript" charset="utf-8" src="https://stells.info/assets/js/partner.fire.js"></script>
            <div class="s-partnership" style="display:none;">Vh0s3xlOtwXs2IQd4pFmTYyYpnOpv2pw1VcnMOp8vMY%3D</div>
        </div>
    </section>

    <section class="sea_way_pay_section">
        <div class="container text_styles lnk_correct">
            <p>{!! $text->description !!}</p>
        </div>
    </section>

    <x-contacts-section></x-contacts-section>
@endsection
