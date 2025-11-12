@extends('layouts.all')

@section('main')
    <section class="banner_video">
        <video autoplay muted loop playsinline class="_video">
            @if ($tour_info->header_bg)
                <source src="{{ Storage::url($tour_info->header_bg) }}" type="video/mp4">
            @else
                <source src="{{ asset('img/exkursionka.mp4') }}" type="video/mp4">
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
{{--
                @if ($tour_info->tour_program)
                    <div class=toyr_program>

                        @foreach ($tour_info->tour_program as $item)
                            <div class="step">
                                <div class="point"></div>
                                <span>{{ $item['type'] }}</span>
                            </div>
                        @endforeach

                        <div class="line"></div>
                    </div>
                @endif --}}


                <a class="button yakor" href="#tours_content">Подробнее о туре</a>
            </div>

            <div class="dop_param page_top_galery">
                @foreach ($tour_info->galery as $photo)
                    @if ($photo['in_top'])
                        <x-palaroid :item="$photo"></x-palaroid>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="tours_content" class="tours_content {{ $tour_info->page_bg }}" >
{{--
        <img class="obl obl_1" src="{{ asset('img/obl/obl_1.svg') }}" alt="">
        <img class="obl obl_2" src="{{ asset('img/obl/obl_2.svg') }}" alt="">
        <img class="obl obl_3" src="{{ asset('img/obl/obl_3.svg') }}" alt=""> --}}

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

                <div id="spb" class="tour_presentation">
                    <div class="step step_1">
                        <div class="header_img_wrapper">
                            <img class="title_img" src="{{ asset('img/templates/spb/spb_h.webp') }}" alt="{{ $tour_info->title }}">
                            <p class="font_caveat">Незабываемый тур в Северную Столицу!</p>
                        </div>

                        <div class="tp_wrapper">
                            <div class="description">
                                <div class="text_styles">
                                    <p>Откройте для себя великолепие Петербурга: обзорная экскурсия по историческому центру, роскошь Петергофа с его фонтанами, тайны Эрмитажа и вечерний круиз по Неве. Вас ждут прогулки по Невскому проспекту, посещение Исаакиевского собора и свободное время для погружения в атмосферу города.</p>
                                    <p>Включено: проживание, завтраки, экскурсии и трансферы. Отправляйтесь в путешествие, где каждый день – новая страница истории!</p>
                                    <p><strong>Забронируйте тур уже сегодня!</strong></p>
                                </div>
                            </div>

                            <div class="present">
                                <x-palaroid :item="$tour_info->galery[0]"></x-palaroid>
                                <x-palaroid :item="$tour_info->galery[1]"></x-palaroid>
                            </div>
                        </div>

                    </div>

                    <div class="step step_2">
                        <div class="header_img_wrapper">
                            <img class="title_img" src="{{ asset('img/templates/spb/is_h.webp') }}" alt="{{ $tour_info->title }}">
                            <p class="font_caveat">Величественный символ Санкт-Петербурга</p>
                        </div>
                        <div class="tp_wrapper">
                            <div class="description">
                                <div class="text_styles">
                                    <p>Грандиозный собор с золотым куполом – визитная карточка города. 40 лет строительства и мастерство Огюста Монферрана подарили миру этот шедевр, где классицизм сочетается с византийскими мотивами.</p>
                                    <p>Внутри – роскошь цветного мрамора, малахитовые колонны и уникальный витраж «Воскресший Христос». Сегодня это и храм, и музей. Поднимитесь на колоннаду – перед вами откроется лучшая панорама Петербурга с Невой и историческим центром.</p>
                                </div>
                            </div>

                            <div class="present">
                                <x-palaroid :item="$tour_info->galery[3]"></x-palaroid>
                                <x-palaroid :item="$tour_info->galery[4]"></x-palaroid>

                            </div>
                        </div>
                    </div>


                    <div class="step step_3">
                        <div class="header_img_wrapper">
                            <img class="title_img" src="{{ asset('img/templates/spb/ks_h.webp') }}" alt="{{ $tour_info->title }}">
                            <p class="font_caveat">Морская крепость России</p>
                        </div>
                        <div class="tp_wrapper">
                            <div class="description">
                                <div class="text_styles">
                                    <p>Легендарный город-порт на острове Котлин – живая история российского флота. Его мощные форты, неприступные стены и строгие линии гаваней веками защищали морские подступы к Петербургу.</p>
                                    <p>Главная жемчужина – Морской Никольский собор с сияющим золотом куполом. Внутри – мемориальные доски с именами погибших моряков и уникальные витражи. Обязательно прогуляйтесь по Петровскому доку, где ремонтировали первые корабли Балтийского флота, и набережной с видом на Финский залив.</p>
                                    <p>Сегодня Кронштадт – это музей под открытым небом, где каждый камень помнит славные морские победы.</p>
                                </div>
                            </div>

                            <div class="present">
                                <x-palaroid :item="$tour_info->galery[12]"></x-palaroid>
                                <x-palaroid :item="$tour_info->galery[13]"></x-palaroid>
                            </div>
                        </div>
                    </div>

                    <div class="step step_4">
                        <div class="header_img_wrapper">
                            <img class="title_img" src="{{ asset('img/templates/spb/petergof_h.webp') }}" alt="{{ $tour_info->title }}">
                            <p class="font_caveat">Танцующие фонтаны и парковые шедевры</p>
                        </div>
                        <div class="tp_wrapper">
                            <div class="description">
                                <div class="text_styles">
                                    <p>Всемирно известная жемчужина паркового искусства, где вода становится произведением искусства. Главная гордость – фонтаны-исполины, создающие волшебную симфонию струй: от триумфального Самсона до игривых шутих.</p>
                                    <p>Архитектурный ансамбль восхищает: золото куполов дворцов перекликается с бирюзой Финского залива. Особое очарование – Марлинский ансамбль и каскад "Золотая гора", где вода струится по позолоченным ступеням.</p>
                                    <p><strong>Петергоф – это праздник для глаз и души в любое время года.</strong></p>
                                </div>
                            </div>

                            <div class="present">
                                <x-palaroid :item="$tour_info->galery[1]"></x-palaroid>
                                <x-palaroid :item="$tour_info->galery[8]"></x-palaroid>
                            </div>
                        </div>
                    </div>
                </div>

                @if (!empty($struct_programm))
                    <div id="programm_tab" class="tour_program_tap">
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



                <div class="girland"></div>

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

    <x-big-obl></x-big-obl>

    <section class="up_sale">
        <div class="container">
            <h2 class="h2_in_page">Смотрите также <br> другие <span class="gold">туры:</span></h2>

            <swiper-container id="any_tours" init="false">
                @foreach ($tour_any as $item)
                    <swiper-slide>
                        <x-tour-card :item="$item"></x-tour-card>
                    </swiper-slide>
                @endforeach
            </swiper-container>

            <div class="reviews_btn_wrapper">
                <a class="arrow_button arrow_pred" id="any_tours_btn_prev" href="#">
                    <svg class="sprite_icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </a>
                <a class="arrow_button arrow_next" id="any_tours_btn_next" href="#">
                    <svg class="sprite_icon">
                        <use xlink:href="#arrow"></use>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <x-contacts-section></x-contacts-section>

@endsection

