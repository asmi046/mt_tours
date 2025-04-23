@extends('layouts.all')

@section('main')
    <section class="banner_video">
        <video autoplay muted loop playsinline poster="{{ asset('img/main-video-obl.webp') }}" class="_video">
            <source src="{{ asset('img/exkursionka.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


            <div class="container left_text">
                <div class="bnr_text">
                    <h1>{!! seo_data()->seo_data->page_title !!}</h1>
                    <p class="subtext">{!! seo_data()->seo_data->page_sub_title !!}</p>
                    <br>
                    <br>
                    <a class="button yakor" href="#tours_cat">Выбрать тур</a>
                </div>
                <div class="dop_param">
                    <x-adv></x-adv>
                </div>
            </div>
    </section>

    <section id="tours_cat" class="turs_in_main_section">
        <img class="obl obl_1" src="{{ asset('img/obl/obl_1.svg') }}" alt="">
        <img class="obl obl_2" src="{{ asset('img/obl/obl_2.svg') }}" alt="">
        <img class="obl obl_3" src="{{ asset('img/obl/obl_3.svg') }}" alt="">

        <div class="container">
            <div class="about_tours">
                <div class="text">
                    <h2>{!! $cat_info->top_title !!}</h2>
                    <div class="subtitle">{!! $cat_info->top_description !!}</div>
                    <a class="button" href="#showModal">Получить консультацию</a>
                </div>
                <div class="el">
                    <img class="turists" src="{{ asset('img/turists.svg') }}" alt="Каталог Майских туров из Курска 2025">
                    <img class="buss" src="{{ asset('img/buss.svg') }}" alt="Каталог Майских туров из Курска 2025">
                </div>
            </div>

            <div class="all_tour_wrapper">
                @foreach ($cat_info->tours as $item)
                    <x-tour-card :item="$item"></x-tour-card>
                @endforeach
            </div>

        </div>
    </section>

    <x-big-obl></x-big-obl>

    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>

@endsection

