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
    <section class="sea_part_navigation_section">
        <div class="container">
            <x-sea.part-navigation></x-sea.part-navigation>
        </div>
    </section>

    <section class="sea_grafik_zaezdov_section">
        <div class="container grafik_zaezdov">

            @foreach ($schedulesGrouped as $key => $item)
                <div class="grafic_derection">
                    <h2>{{ $key }}</h2>

                    <div class="grafic_punkts">




                        <div class="left">
                            <h3>График заездов</h3>
                            <div class="schedule_table">
                                @foreach ($item as $shadule)
                                    <div class="schedule_row">
                                        Выезд из Курска <strong>{{ $shadule->start_date }}</strong> - возвращение
                                        <strong>{{ $shadule->end_date }}</strong>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="right">
                            <h3>Пункты следования</h3>
                            <div class="puncts">
                                <div class="punct">
                                    Курск
                                </div>
                                @foreach ($resortsGrouped[$key] as $punkt)
                                    {{-- <span class="arrow">↔</span> --}}
                                    <div class="punct">
                                        {{ $punkt->title }}
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </section>
@endsection
