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
                <h1>Купить проезд к черноморскому побережью из Курска «ЛЕТО 2026»</h1>
                <p class="subtext">Выгодные цены на проезд к черноморскому побережью из Курска. Спешите отдохнуть с
                    МирТуризма46</p>
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

    <section class="sea_way_pay_section">
        <div class="container">
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
                                    <td>{{ $price->city }}</td>
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
@endsection
