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
                <h1>{{ $page->title }}</h1>
                @if ($page->subtitle)
                    <p class="subtext">{{ $page->subtitle }}</p>
                    <br>
                @endif
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="school-tours" id="programm_tab">
        <div class="container text_styles">
            {!! $page->description !!}
        </div>
    </section>
@endsection
