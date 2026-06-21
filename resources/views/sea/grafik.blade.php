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
                <h1>Расписание движения автобусов</h1>
                <p class="subtext">Все нюансы и детали расписания движения наших автобусов публикуются на этой странице.</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Расписание движения автобусов"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="sea_way_pay_section text_styles lnk_correct">
        <div class="container">
            {!! $grafik->description !!}
        </div>
    </section>
@endsection
