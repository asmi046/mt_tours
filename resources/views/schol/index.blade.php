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
                    <h1>Школьные туры от Мир Туризма 46</h1>
                    <p class="subtext">Все актуальные школьные туры с выездом из Курска. Приглашаем к сотрудничеству школы и другие учебные заведения</p>
                    <br>
                    <br>
                    <x-cat-banner-btn-page></x-cat-banner-btn-page>
                </div>
            </div>
    </section>

<section class="school-tours" id="programm_tab">
    <div class="container">
        <p>Наш коллектив имеет огромный опыт в проведении школьных экскурсий. Мы предоставим для Вас удобные, комфортабельные автобусы, опытных экскурсоводов и подберем незабываемую программу для школьников всех возрастов.</p>

        <div class="scholl_lending_wrap">
			<div class="spb_subsidias">
					<div class="info">
						<h3>Tур в Санкт-Петербург для школьников</h3>
						<p>Социальная программа стимулирования развития детского туризма. Учащимся школ Курска и Курской области предоставляется возможность совершить путеществие в Санкт-Петербург по субсидированной специальной цене в период Весна - Лето 2026</p>
						<br>
						<a class="button" href="https://spb.mirturizma46.ru/">Подробнее</a>
					</div>
				</div>

				<div class="spb_subsidias spb_subsidias_kreml">
					<div class="info">
						<h3>Приглашаем на кремлевскую елку</h3>
						<p>Приглашаем Вас в Новогодний тур в Москву! Вы посетите незабываемое мероприятие «Кремлёвскую Ёлку🎄» – самое главное Новогоднее представление в России и заветная мечта для миллионов мальчишек и девчонок!</p>
						<br>
						<a class="button" href="https://kreml.mirturizma46.ru/">Подробнее</a>
					</div>
			</div>
		</div>


        <tap class="add-flex-wrap" :header="{{ json_encode(array_keys($tours->toArray())) }}">
            @foreach ( $tours as $key => $item)
                <template v-slot:body{{ $loop->index + 1 }}>
                    <div class="school-tour-list">
                        @foreach ($item as $tour)
                            <x-cards.school :item="$tour"></x-cards.school>
                        @endforeach
                    </div>
                </template>
            @endforeach
        </tap>


    </div>
</section>

<x-contacts-section></x-contacts-section>

@push('page_modals')
    <x-modal id="scholAuto" open-hash="scholAuto">
        <img class="schol_modal__img"
             src="{{ asset('img/school/m_img.webp') }}"
             alt="Школьные туры">
        <div class="schol_modal__cta">
            <h2 class="modal_h2">Подберём тур для вашего класса</h2>
            <p class="sub_h">Оставьте заявку — мы свяжемся и предложим лучшие варианты</p>
        </div>
        <form class="sending_form schol_modal__form"
              data-modal-form
              data-action="/send_consult"
              method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text"
                   name="phone"
                   placeholder="Телефон*"
                   inputmode="tel"
                   autocomplete="tel"
                   required>
            <div class="error_list_wrap"></div>
            <p class="policy_descr">
                Заполняя данную форму и отправляя заявку вы соглашаетесь с
                <a target="_blank"
                   href="{{ route('page', 'politika-v-oblasti-obrabotki-personalnyx-dannyx') }}">
                    политикой конфиденциальности
                </a>
            </p>
            <div class="control_wrap">
                <button class="btn" type="submit">Отправить</button>
                <div class="loader" hidden></div>
            </div>
        </form>
        <div class="accept_message" style="display: none;">
            <p class="emoji">📢🤝✅</p>
            <h2>Ваше сообщение отправлено</h2>
        </div>
    </x-modal>
@endpush

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (sessionStorage.getItem('scholModalShown')) return;
        setTimeout(() => {
            sessionStorage.setItem('scholModalShown', '1');
            if (location.hash !== '#scholAuto') location.hash = 'scholAuto';
        }, 30000);
    });
</script>

@endsection
