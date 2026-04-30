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
                <h1>{{ $sea_way_resort->title }}</h1>
                <p class="subtext">Выгодные цены и проезд автобусом дом моря по направлению Курск -
                    {{ $sea_way_resort->city }}. Мы гарантируем комфортабельные автобусы и безопасность в пути.</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Купить билет Курск - {{ $sea_way_resort->city }}"></x-breadcrumbs.main>
        </div>
    </section>



    <section class="sea_way_resort_section">
        <div class="container text_styles lnk_correct">
            <p>{!! $sea_way_resort->description !!}</p>
        </div>
    </section>

    <section class="sea_way_pay_section">
        <div class="container">
            <div id="way_calc" class="col">
                <way-calc-resort city-name="{{ $sea_way_resort->city }}" :prices='@json(['two_way' => $sea_way_resort->two_way, 'one_way' => $sea_way_resort->one_way])'
                    :schedule='@json($sea_way_resort->busSchedules)'></way-calc-resort>
            </div>
        </div>
    </section>

    <section class="sea_grafik_zaezdov_section">
        <div class="container">
            <h2>Расписание рейсов автобусов Курск - {{ $sea_way_resort->city }}</h2>
            <div class="grafic_derection">

                <div class="grafic_punkts">
                    <div class="left">
                        <div class="schedule_table">
                            @foreach ($sea_way_resort->busSchedules as $shadule)
                                <div class="schedule_row">
                                    Выезд из Курска <strong>{{ $shadule->start_date }}</strong> - возвращение
                                    <strong>{{ $shadule->end_date }}</strong>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>



    <section class="sea_way_resort_section">
        <div class="container">
            <h2>Наш автобусный парк</h2>
            <x-sea.bus-vidget></x-sea.bus-vidget>
        </div>
    </section>

    <section class="sea_way_resort_section">
        <div class="container">
            <h2>Навигация по разделу - Автобусные туры на море</h2>
            <br>
            <x-sea.part-navigation></x-sea.part-navigation>
        </div>
    </section>

    <section class="sea_way_faq_section">
        <div class="container text_styles lnk_correct">
            <h2>Часто задаваемые вопросы</h2>
            <x-faq section="Купить проезд на море"></x-faq>
        </div>
    </section>
@endsection
