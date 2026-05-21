@extends('layouts.all')

@section('main')
    <section id="banner_video_main_page" class="banner_video mini">
        @if ($page->video)
            <video autoplay muted loop playsinline poster="{{ asset('video/sea_black.webp') }}" class="_video">
                <source src="{{ Storage::url($page->video) }}" type="video/mp4">
            </video>
        @else
            <video autoplay muted loop playsinline poster="{{ asset('video/zagran_all.webp') }}" class="_video">
                <source src="{{ asset('video/zagran_all.mp4') }}" type="video/mp4">
            </video>
        @endif
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text">
            <div class="bnr_text">
                <h1> Горящие туры в {{ $page->name_vp }}</h1>
                <p class="subtext">Все горящие туры в {{ $page->name_vp }} от ведущих туроператоров. Купите горящий тур в
                    {{ $page->name_vp }} прямо в Курске!</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main :page="$page" title="Горящие туры в {{ $page->name_vp }}"></x-breadcrumbs.main>
        </div>
    </section>



    <section class="zagran_way_section_top">
        <div class="container">
            <h2>Лучшие горящие туры в {{ $page->name_vp }} для вас</h2>

            <div class="text_about_resort text_styles">
                Мы подобрали самые выгодные горящие туры в {{ $page->name_vp }} от лучших туроператоров. Актуальные
                предложения, проверенные отели и поддержка менеджера. Лучшие цены по Курску. Если Вам трудно выбрать наши
                менеджеры помогут вам разобраться в предложениях и подобрать тур, который идеально подойдет именно Вам.
                Просто нажмите кнопку и оставьте свой номер телефона и мы свяжемся с Вами в самое короткое время.
                <br>
                <br>
                <a href="#showModal" class="button">Подобрать тур в {{ $page->name_vp }}</a>
                <br>
                <br>
            </div>

            {!! $page->hot_tours_script !!}
        </div>
    </section>
    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>

    <x-zagran.vidget></x-zagran.vidget>


    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>
@endsection
