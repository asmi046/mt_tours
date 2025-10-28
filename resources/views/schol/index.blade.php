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


        <tap :header="{{ json_encode(array_keys($tours->toArray())) }}">
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

@endsection
