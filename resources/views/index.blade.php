@extends('layouts.all')

@section('main')
    <section id="banner_video_main_page" class="banner_video">
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

                    <x-cat-banner-btn></x-cat-banner-btn>


                </div>

                <div class="dop_param">
                    <div class="arrow_widget">
                        <div class="arrow"></div>
                        <span>Выбирай!</span>
                    </div>
                    <x-main.button-in-banner></x-main.button-in-banner>
                </div>

            </div>

            {{-- <div class="marque_wrap">
                <div class="marque">
                    <span class='str'>Лучшие предложения</span>
                    <span class='str'>Постоянные скидки</span>
                    <span class='str'>Комфортабельные автобусы</span>
                    <span class='str'>Отличные туристические программы</span>
                    <span class='str'>Лучшие предложения</span>
                    <span class='str'>Постоянные скидки</span>
                    <span class='str'>Комфортабельные автобусы</span>
                    <span class='str'>Отличные туристические программы</span>
                </div>
            </div> --}}
    </section>

    <section id="tours_cat" class="turs_in_main_section">
        <img class="obl obl_1" src="{{ asset('img/obl/obl_1.svg') }}" alt="">
        <img class="obl obl_2" src="{{ asset('img/obl/obl_2.svg') }}" alt="">
        <img class="obl obl_3" src="{{ asset('img/obl/obl_3.svg') }}" alt="">

        <div class="container">
            <div class="about_tours">
                <div class="text">
                    <h2>Самые актуальные туры <br>из Курска <strong class="gold">2025</strong></h2>
                    <p class="subtitle">Выберите тур самостоятельно или оставьте заявку и наши специалисты помогут Вам и ответят на все Ваши вопросы!</p>
                    <a class="button" href="#showModal">Получить консультацию</a>
                </div>
                <div class="el">
                    <img class="turists" src="{{ asset('img/turists.svg') }}" alt="Каталог экскурсионных туров из Курска 2025">
                    <img class="buss" src="{{ asset('img/buss.svg') }}" alt="Каталог экскурсионных туров из Курска 2025">
                </div>
            </div>

            <x-tours-in-main></x-tours-in-main>
        </div>
    </section>

    <x-big-obl></x-big-obl>

    <x-rew></x-rew>

    <x-contacts-section></x-contacts-section>

@endsection

