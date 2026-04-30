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
                <h1>Купить билеты на автобус к Черному морю из Курска «ЛЕТО 2026»</h1>
                <p class="subtext">У нас вы можете приобрести билеты на проезд автобусом к курортам черноморского побережья.
                    Комфортабельные туристические автобусы отправляются прямо из Курска.</p>
                <br>
                <x-cat-banner-btn-page></x-cat-banner-btn-page>
            </div>
        </div>
    </section>

    <section class="breadcrumbs_section">
        <div class="container">
            <x-breadcrumbs.main title="Купить проезд на море"></x-breadcrumbs.main>
        </div>
    </section>

    <section class="sea_way_pay_section lnk_correct">
        <div class="container">
            <x-sea.part-navigation></x-sea.part-navigation>
            <div class="cols">
                <div class="col">
                    <table>
                        <thead>
                            <tr>
                                <th>Город</th>
                                <th>Цена в обе стороны</th>
                                <th>Цена в одну сторону</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sea_way_prices as $price)
                                <tr>
                                    <td>
                                        <a title="Купить проезд в {{ $price->city }}"
                                            href="{{ route('kupit_proezd_resort', ['slug' => $price->slug]) }}">
                                            {{ $price->city }}
                                        </a>
                                    </td>
                                    <td>{{ $price->two_way }} руб.</td>
                                    <td>
                                        @if ($price->one_way)
                                            {{ $price->one_way }} руб.
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="way_calc" class="col">
                    <way-calc :prices='@json($sea_way_prices)'></way-calc>
                </div>
            </div>
        </div>
    </section>

    <section class="sea_way_pay_section">
        <div class="container text_styles lnk_correct">
            <p>{!! $text->description !!}</p>
        </div>
    </section>

    <section class="sea_way_pay_buses_widget_section">
        <div class="container">
            <h2>Наш автобусный парк</h2>
            <x-sea.bus-vidget></x-sea.bus-vidget>
        </div>
    </section>

    <section class="sea_way_faq_section">
        <div class="container text_styles lnk_correct">
            <h2>Часто задаваемые вопросы</h2>
            <x-faq section="Купить проезд на море"></x-faq>
        </div>
    </section>
@endsection
