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
                    <h1>Новости от Мир Туризма 46</h1>
                    <p class="subtext">Все актуальные новости в туристической сфере.</p>
                    <br>
                    <br>
                    <x-cat-banner-btn-page></x-cat-banner-btn-page>
                </div>
            </div>
    </section>

<section class="news_section" >
    <div class="container">
        <div class="news-section">
            @foreach ($news as $item)
                <div class="news-item">
                    <div class="news-image">
                        <img src="{{ asset($item['img']) }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">{{ $item['title'] }}</h3>
                        <p class="news-excerpt">{{ $item['excerpt'] }}</p>
                        <div class="button_wrapper">
                            <a href="{{ $item['link'] }}" class="button">Подробнее</a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<x-contacts-section></x-contacts-section>

@endsection
