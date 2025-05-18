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
                    <h1>Календарь туров</h1>
                    <p class="subtext">Специально для наших любимых туристов мы собрали все туры в одном разделе и поместили их в календарь</p>
                    <br>
                    <br>

                    <x-cat-banner-btn></x-cat-banner-btn>


                </div>



            </div>

    </section>

<section>
    <div class="container">
        <div class="calendar_selector">
            @foreach ($selector as $item)
                <a @class(['month_selector', 'active' => ($item['param'] === $curent_month)]) href="{{ route('calendar', ['month' => $item['param']]) }}">{{ $item['text'] }}</a>
            @endforeach
        </div>
        {!! $month !!}
    </div>
</section>

<x-contacts-section></x-contacts-section>

@endsection
