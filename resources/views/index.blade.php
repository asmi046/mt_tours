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
                    <div class="param_blk param_blk_1 yandex">
                        <div class="ya_logo"></div>
                        <div class="text_blk">
                            <div class="stars_wrapper">
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                                <div class="star"></div>
                            </div>
                            <p>Лучшая туристическая <br>компания</p>
                        </div>

                    </div>

                    <div class="param_blk param_blk_2 cr_1">
                        <div class="cerecter">
                            20
                        </div>
                        <p>Лет на рынке туристических услуг Курской области</p>
                    </div>

                    <div class="param_blk param_blk_3 cr_2">
                        <div class="cerecter">
                            12
                        </div>
                        <p>Уникальных предложений на майские праздники для всей семьи</p>
                    </div>
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
                    <h2>Майские туры <br>из Курска <strong class="gold">2025</strong></h2>
                    <p class="subtitle">Встречай весну с урагана эмоций и впечатлений вместе с турами от МирТуризма. У нас Вы найдете путешествия на любой вкус и кошелек.</p>
                    <a class="button" href="#showModal">Получить консультацию</a>
                </div>
                <div class="el">
                    <img class="turists" src="{{ asset('img/turists.svg') }}" alt="Каталог Майских туров из Курска 2025">
                    <img class="buss" src="{{ asset('img/buss.svg') }}" alt="Каталог Майских туров из Курска 2025">
                </div>
            </div>

            <x-tours-in-main></x-tours-in-main>
        </div>
    </section>

    <x-big-obl></x-big-obl>

    <section class="review_section">
        <div class="container">
            <h2 class="h2_in_page">Отзывы <br><span class="gold">довольных</span> клиентов</h2>
            <div id="review_app" class="review_app">
                <review></review>
            </div>
        </div>
    </section>

    <x-contacts-section></x-contacts-section>

@endsection

