@extends('layouts.all')

@section('dop_class', 'new_year')
@section('main')
    <section id="banner_video_main_page" class="banner_video mini">
        <video autoplay muted loop playsinline poster="{{ asset('img/main-video-obl.webp') }}" class="_video">
            <source src="{{ asset('video/black_fr.mp4') }}" type="video/mp4">
        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text">
            <div class="bnr_text">
                <h1>ЧЕРНАЯ ПЯТНИЦА <br>от МирТуризма46</h1>
                <p class="subtext">Встречайте лучшую туристическую распродажу года BLACK FRIDAY от МирТуризма46 отдохни
                    выгодно!</p>
                <br>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="news_section">
        <div class="container text_styles lnk_correct">
            <h2>Предложения по акции продлятся ТОЛЬКО 3 дня с 27 ноября по 29 ноября</h2>

            <ul>
                <li>-1000 ₽ на <a href="/tour/adygeia">Новогодний тур в Адыгею</a></li>
                <li>-1000 ₽ на <a href="/tour/sankt-peterburg-zima">Новогодний тур в Санкт-Петербург и Карелию</a></li>
                <li>-1000 ₽ на <a href="/tour/kazan-new-year">Новогодний тур в Казань</a></li>
                <li>-1000 ₽ на <a href="/tour/tur-na-kremlevskuiu-elku">Новогодний тур на Кремлёвскую Ёлку в Кремле</a></li>
                <li>-1000 ₽ на <a href="/tour/tur-elka-xxs">Новогодний тур на Рождественскую Ёлку в Храме Христа
                        Спасителя</a></li>
                <li>-1000 ₽ на <a href="/tour/novogodnee-ledovoe-sou-tatiany-navka-kop">Новогодние ледовые Шоу Татьяны Навка
                        "Щелкунчик" и "Орфей и Эвридика"</a></li>
                <li>-500 ₽ на <a href="/tours/new-year">ВСЕ ОСТАЛЬНЫЕ НОВОГОДНИЕ ТУРЫ</a></li>
                <li>-500 ₽ на проезд автобусом на море в сезоне ЛЕТО 2027</li>
                <li>до -25% на автобусные туры на море в сезоне ЛЕТО 2027</li>
                <li>скидки в отелях, экскурсии, трансферы в подарок</li>
                <li>улучшение уровня номера в отелях, повышение уровня питания</li>
                <li>уникальные цены на туры в Египет, Тайланд, Эмираты, Турцию, Сочи, Великий Устюг, Шерегеш, Мурманск, на
                    Байкал и др.</li>
                <li>специальные предложения на спортивные, косметические и SPA услуги (йога, талассотерапия, косметические
                    процедуры, массажи и тд.)</li>
                <li>подарочные билеты на развлекательные мероприятия</li>
                <li>Подарочные сертификаты на посещение СПА, музеев и магазинов</li>
                <li>Подарочные карты и купоны</li>
                <li>и многое другое!</li>
            </ul>


        </div>
    </section>

    <x-big-girliand :dop_class="'new_year'"></x-big-girliand>

    <x-contacts-section></x-contacts-section>
@endsection
