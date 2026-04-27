<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="yandex-verification" content="b4ee04063d8fdee2" />

    @header_seo

    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon256.png') }}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon128.png') }}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon16.png') }}" sizes="16x16">

    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="default_sale"
        content="{{ config('sales.default_sale') + (request()->is('tour/novogodniaia-adygeia') ? 500 : 0) }}">
    <meta name="show_sale" content="{{ config('sales.show_sale') }}">

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

        ym(29416892, 'init', {
            webvisor: true,
            trackHash: true,
            clickmap: true,
            referrer: document.referrer,
            url: location.href,
            accurateTrackBounce: true,
            trackLinks: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/29416892" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->




    <script>
        window.asset = "{{ asset('') }}";
        window.storage = "{{ asset('storage') }}";
        window.isMobile = window.innerWidth < 768;
    </script>

</head>

<body class="body @yield('dop_class')">

    {{-- <x-preloader></x-preloader> --}}

    <x-menues.side-menu></x-menues.side-menu>

    @include('allicon')
    <main id="main" class="main @yield('dop_class')">
        <div id="smooth-wrapper">
            <div id="smooth-content">
                @if (config('sales.show_marquee'))
                    <section class="black_friday">
                        <div class="marquee">
                            <div class="marquee__content">
                                @for ($i = 0; $i < 10; $i++)
                                    <p><a target="_blank" href="https://www.mirturizma46.ru/tour/gastro-tur">ГастроТур
                                            «Кофе/Сыр. Хлеб и Вино» 🍷</a></p>
                                    {{-- <img src="{{ asset('img/icon/flovers.svg') }}" alt="Снежинка"> --}}
                                    <p><a target="_blank" href="https://www.mirturizma46.ru/tour/matrona"> Матрона
                                            Московская 🙏</a></p>
                                    {{-- <img src="{{ asset('img/icon/flovers.svg') }}" alt="Снежинка"> --}}
                                    <p><a target="_blank" href="https://www.mirturizma46.ru/tour/adygea">Адыгея на
                                            майские праздники ⛰️</a></p>
                                    {{-- <img src="{{ asset('img/icon/flovers.svg') }}" alt="Снежинка"> --}}
                                @endfor
                            </div>
                        </div>
                    </section>
                @endif

                @yield('main')
                <x-footer></x-footer>
            </div>
        </div>

    </main>
    <div class="modal_win" id="global_app">

        <modal-window rout="/send_consult" redirect="/thencs" hesh="showModal" title="Помощь специалиста"
            subtitle="Мы свяжемся с Вами в ближайшее время"></modal-window>
        <empty-modal hesh="howpay" title="Как купить тур" subtitle="Инструкция по покупке тура">
            <div class="instruction_steps smooth-scroll " data-scrollsmoother="ignore">
                <div class="instruction_steps_wrap">
                    <h2>Шаг №1</h2>
                    <p>Выберите дату:</p>
                    <img src="{{ asset('img/instruction/step1.webp') }}" alt="Выберите дату">

                    <h2>Шаг №2</h2>
                    <p>Выберите тип тура:</p>
                    <img src="{{ asset('img/instruction/step2.webp') }}" alt="Выберите тип тура">

                    <h2>Шаг №3</h2>
                    <p>Нажмите на кнопку для перехода к оплате:</p>
                    <img src="{{ asset('img/instruction/step3.webp') }}" alt="Нажмите на кнопку для перехода к оплате">

                    <h2>Шаг №4</h2>
                    <p>Заполните персональные данные:</p>
                    <img src="{{ asset('img/instruction/step4.webp') }}" alt="Заполните персональные данные">

                    <h2>Шаг №5</h2>
                    <p>Оплатите удобным способом:</p>
                    <img src="{{ asset('img/instruction/step5.webp') }}" alt="Оплатите удобным способом">
                </div>
            </div>
        </empty-modal>

        <cookies-warning privacy-policy-link="{{ route('page', 'politika-v-oblasti-obrabotki-personalnyx-dannyx') }}"
            cookies-info-link="{{ route('page', 'o-failax-cookie') }}"
            privacy-policy-accept-link="{{ route('page', 'soglasie-na-obrabotku-personalnyx-dannyx') }}" />
    </div>

</body>

<script src="{{ asset('js/ScrollSmoother.min.js') }}"></script>

</html>
