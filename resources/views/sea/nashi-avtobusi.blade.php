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
                <h1>Наши автобусы</h1>
                <p class="subtext">Для организации комфортного и безопасного отдыха мы используем только современные
                    автобусы, оснащенные всем необходимым для приятного путешествия. Наш автопарк включает в себя автобусы
                    различных классов, от эконом до люкс, чтобы каждый мог выбрать подходящий вариант для своего путешествия
                    с
                    МирТуризма46</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Наши автобусы"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="sea_grafik_zaezdov_section">
        <div class="container text_styles">
            <p>Туристический центр «Мир Туризма» предлагает к Вашим услугам парк современных туристических автобусов,
                которые
                сделают любое путешествие комфортным!</p>

            <p>В нашем автобусном парке комфортабельные туристические автобусы ведущих производителей: Neoplan,
                Mercedes-Benz,
                Zhong Tong, Setra и др.:</p>

            <div class="buss_pointer_list">
                @foreach ($busees as $item)
                    <div class="buss_pointer_item">

                        <a href="#buss-{{ $item->id }}" class="button">{{ $item->title }}</a>

                    </div>
                @endforeach
            </div>

            <div class="buss_list">
                @foreach ($busees as $item)
                    <div id="buss-{{ $item->id }}" class="buss_item">
                        <h2>{{ $item->title }}</h2>
                        <div class="galery">
                            @foreach ($item->gallery as $gal)
                                <a data-fslightbox="license-galery-{{ $item->id }}"href="{{ Storage::url($gal['file']) }}"
                                    class="galery_item">
                                    <div class="img_wrapper">
                                        <img src="{{ Storage::url($gal['file']) }}" alt="">
                                    </div>

                                    <p>{{ $gal['description'] }}</p>
                                </a>
                            @endforeach
                        </div>
                        @if ($item->description)
                            <div class="buss_description">{!! $item->description !!}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>


    </section>
@endsection
