@extends('layouts.all')

@section('dop_class', 'new_year')
@section('main')
    <section id="banner_video_category" class="banner_video">
        <video autoplay muted loop playsinline poster="{{ asset('img/main-video-obl.webp') }}" class="_video">
            <source src="{{ asset('video/new_year.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


            <div class="container left_text">
                <div class="bnr_text">
                    <h1>{!! $cat_info->html_name !!}</h1>
                    <p class="subtext">{!! seo_data()->seo_data->page_sub_title !!}</p>
                    <br>
                    <br>
                    <x-cat-banner-btn></x-cat-banner-btn>
                </div>
                <div class="dop_param">
                    <x-adv></x-adv>
                </div>
            </div>
    </section>

    <section id="tours_cat" class="turs_in_main_section new_year_section">

        <div class="container">
            <div class="about_tours">
                <div class="text">
                    <h2>{!! $cat_info->top_title !!}</h2>
                    <div class="subtitle">{!! $cat_info->top_description !!}</div>
                    <a class="button" href="#showModal">Получить консультацию</a>
                </div>
                <div class="el">
                    <img class="turists elka" src="{{ asset('img/new_year/main_el.svg') }}" alt="Каталог туров из Курска 2025">
                    <img class="buss igruhi" src="{{ asset('img/new_year/igruhi.svg') }}" alt="Каталог туров из Курска 2025">
                </div>
            </div>

            <div class="all_tour_wrapper greed">
                @foreach ($cat_info->tours as $item)
                    <div class="g_cell">
                        <x-tour-card :item="$item"></x-tour-card>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <x-big-girliand :dop_class="'new_year'"></x-big-girliand>

    <x-rew :dop_class="'new_year'"></x-rew>

    <x-contacts-section :dop_class="'new_year'"></x-contacts-section>

@endsection

