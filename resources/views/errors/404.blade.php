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
                    <h1>404 Ой! Тут ничего нет!</h1>
                    <p class="subtext">К сожалению, запрашиваемая страница не найдена.</p>
                    <br>
                    <br>
                    <x-cat-banner-btn-page></x-cat-banner-btn-page>
                </div>
            </div>
    </section>

<section class="error_section" >
    <div style="text-align: center;" class="container">
        <a href="{{ route('home') }}" class="button">На главную страницу</a>
        <br>
        <br>
        <br>
        <a href="{{ route('calendar') }}" class="button">Календарь туров</a>
    </div>
</section>

<x-contacts-section></x-contacts-section>

@endsection
