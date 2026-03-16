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
                <h1>График заездов (Крым, Краснодарский край) «ЛЕТО 2026»</h1>
                <p class="subtext">Специально для Вас мы подготовили удобный график заездов на курорты черноморского
                    побережя. Спешите отдохнуть с
                    МирТуризма46</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="График заездов (Крым, Краснодарский край)"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="sea_grafik_zaezdov_section">
        <div class="container">

        </div>
    </section>
@endsection
