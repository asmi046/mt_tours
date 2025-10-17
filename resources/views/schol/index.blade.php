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
                    <h1>Школьные туры от Мир Туризма 46</h1>
                    <p class="subtext">Все актуальные школьные туры с выездом из Курска. Приглашаем к сотрудничеству школы и другие учебные заведения</p>
                    <br>
                    <br>
                    <x-cat-banner-btn-page></x-cat-banner-btn-page>
                </div>



            </div>

    </section>

<section class="school-tours">
    <div class="container">
        <p>Наш коллектив имеет огромный опыт в проведении школьных экскурсий. Мы предоставим для Вас удобные, комфортабельные автобусы, опытных экскурсоводов и подберем незабываемую программу для школьников всех возрастов.</p>
        <div class="school-tour-list">
            @foreach ($tours as $tour)
                <x-cards.school :item="$tour"></x-cards.school>
            @endforeach
        </div>
    </div>
</section>

<x-contacts-section></x-contacts-section>

@endsection
