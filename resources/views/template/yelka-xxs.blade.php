@extends('layouts.all')

@section('dop_class', 'new_year')
@section('main')
    <section class="banner_video">
        <x-tours-arrow caption="О туре" link="tours_content"></x-tours-arrow>
        <video autoplay muted loop playsinline preload="metadata"
        poster="{{ asset('img/poster.webp') }}"
        class="_video">
            @if ($tour_info->header_bg)
                <source src="{{ Storage::url($tour_info->header_bg) }}" type="video/mp4" fetchpriority="high">
            @else
                <source src="{{ asset('video/new_year.mp4') }}" type="video/mp4" fetchpriority="high">
            @endif

        </video>
        <div class="shadow"></div>

        <x-header></x-header>


        <div class="container left_text tour_page_title">
            <div class="bnr_text">
                <h1>{!! $tour_info->title_input?htmlspecialchars_decode($tour_info->title_input):$tour_info->title !!}</h1>
                @isset($tour_info->prices[0])
                    <p class="label label_gold">от {{ $tour_info->prices[0]['price'] }} ₽</p>
                @endisset

                <p class="label label_white">{{ $tour_info->deycount }}  {{ echo_days($tour_info->deycount) }}</p>

                @if ($tour_info['multi_data'])
                    <p class="label label_white">
                        @foreach ($tour_info['multi_data'] as $subitem)
                            {{ date ("d.m.Y", strtotime($subitem['start_data'])) }}@if ($loop->index != count($tour_info['multi_data'])-1),@endif
                        @endforeach
                    </p>
                @else
                    <p class="label label_white">{{ date ("d.m.Y", strtotime($tour_info['start_data'])) }}</p>
                @endif

                @if ($tour_info->head_tour_program)
                    <div class="head_toyr_program">

                        @foreach ($tour_info->head_tour_program as $item)
                            <div class="step">
                                <div class="point"></div>
                                <span>{{ $item['title'] }}</span>
                            </div>
                        @endforeach

                        <div class="line"></div>
                    </div>
                @endif


                <a class="button yakor" href="#tours_content">Подробнее о туре</a>
            </div>

            <div class="dop_param page_top_galery">
                @foreach ($tour_info->galery as $photo)
                    @if ($photo['in_top'])
                        <x-palaroid load="eager" :item="$photo"></x-palaroid>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="tours_content" class="tours_content new_year_section" >
        <div class="container">
            <div class="tour_info">
                <div id="price_app" class="top_info text_styles">
                    <div class="text">
                        {!! $tour_info->top_description !!}
                    </div>

                    @isset($tour_info->prices[0])
                        <div class="pay_wrapper">
                            @if ($tour_info->soldout)
                            <div class="tour_price">
                                <img class="soldout" src="{{ asset('img/soldout.webp') }}" alt="Тур продан, мест нет!">
                                <a class="button button_icon" href="#showModal"><i class="babl_icon"></i><span>Задать вопрос</span></a>
                            </div>

                            @else
                                @if (isset($tour_info->prices[0]['data']))
                                    <tour-price-select title="{{$tour_info->title}}" img="{{config('app.url').Storage::url($tour_info->img)}}"  :prices="{{json_encode($tour_info->prices)}}"></tour-price-select>
                                @else
                                    <tour-price title="{{$tour_info->title}}" img="{{config('app.url').Storage::url($tour_info->img)}}"  :prices="{{json_encode($tour_info->prices)}}"></tour-price>
                                @endif
                            @endif



                        </div>
                    @endisset

                </div>



                <div class="video_presentation ">
                    <h2 class="big">В программе тура вы увидите:</h2>
                    <div class="video_wrap video_2">
                        <div class="video-presentation-item">
                            <div class="video-container">
                                <video controls preload="metadata">
                                    <source src="{{ asset('video/elka_hhs.mp4') }}" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            </div>
                            <p class="video-caption">Рождественская елка в Храме Христа Спасителя</p>
                        </div>
                        <div class="video-presentation-item">
                            <div class="video-container">
                                <video controls preload="metadata">
                                    <source src="{{ asset('video/dm_usadba.mp4') }}" type="video/mp4">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            </div>
                            <p class="video-caption">Московская усадьба Деда Мороза</p>
                        </div>
                    </div>

                    <img class="yel_from_video" src="{{ asset('img/new_year/yel_from_video.png') }}" alt="">
                </div>

                <div class="galery">
                    <h2 class="big">Яркие моменты тура</h2>
                    <div class="cards">
                        @foreach ($tour_info->galery as $photo)
                            <x-palaroid :item="$photo"></x-palaroid>
                        @endforeach
                    </div>
                </div>

                @if (!empty($struct_programm))
                    <div id="programm_tab" class="tour_program_tap new_year">
                        <h2 class="big"></h2>
                        <x-tour-program-tap :programm="$struct_programm"></x-tour-program-tap>
                    </div>
                    @if ($tour_info->program)
                        <div class="program">
                            <h2 class="big">Полезная информация</h2>
                            <div class="text_styles">
                                {!! $tour_info->program !!}
                            </div>
                        </div>
                    @endif

                @else
                    <div class="program">
                        <h2 class="big">Программа тура</h2>
                        <div class="text_styles">
                            {!! $tour_info->program !!}
                        </div>
                    </div>
                @endif



                <div class="girland girland_new_year"></div>

                @if ($tour_info->in_price)
                    <div class="in_price">
                        <h2 class="big">В цену входит</h2>
                        <div class="text_styles">
                            {!! $tour_info->in_price !!}
                        </div>
                    </div>
                @endif

                @if ($tour_info->out_price)
                    <div class="program">
                        <h2 class="big">За отдельную плату</h2>
                        <div class="text_styles">
                            {!! $tour_info->out_price !!}
                        </div>
                    </div>
                @endif


            </div>


        </div>
    </section>

    <x-big-girliand :dop_class="'new_year'"></x-big-girliand>

    <x-category-any-tours :category-name="'Туры на Новогодние Праздники'" :dop-class="'new_year_section'"></x-category-any-tours>

    <x-contacts-section :dop_class="'new_year'"></x-contacts-section>

@endsection

