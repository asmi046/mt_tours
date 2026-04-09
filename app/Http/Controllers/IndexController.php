<?php

namespace App\Http\Controllers;

use Asmi\JsonLd\Facades\JsonLd;

class IndexController extends Controller
{
    public function index()
    {

        $org = JsonLd::organization()
            ->name('МирТуризма46')
            ->url(config('app.url'))
            ->logo(config('app.url').'/img/logo_main.png')
            ->email('mirturizma-kursk2@yandex.ru')
            ->telephone('+7 (4712) 306-000')
            ->address('305000, г. Курск, ул. Ленина, 12')
            ->description('МирТуризма46 - ваш надежный партнер в мире путешествий. Мы предлагаем широкий выбор туров, экскурсий и круизов по всему миру. Наша команда профессионалов поможет вам организовать незабываемый отпуск, учитывая все ваши пожелания и бюджет. С нами вы откроете для себя новые горизонты и создадите яркие воспоминания! Свяжитесь с нами сегодня и начните планировать свое следующее приключение!')
            ->sameAs([
                'https://vk.com/mirturizma46',
                'https://ok.ru/group/54374461079804',
                'https://t.me/mirturizma46',
            ])
            ->render();

        $website = JsonLd::website()
            ->name('МирТуризма46 - надежный туроператор в Курске, туры на любой вкус и кошелек')
            ->url(config('app.url'))
            ->description('МирТуризма46 - ваш надежный партнер в мире путешествий. Мы предлагаем широкий выбор туров, экскурсий и круизов по всему миру. Наша команда профессионалов поможет вам организовать незабываемый отпуск, учитывая все ваши пожелания и бюджет. С нами вы откроете для себя новые горизонты и создадите яркие воспоминания! Свяжитесь с нами сегодня и начните планировать свое следующее приключение!')
            ->logo(config('app.url').'/img/logo_main.png')
            ->image(config('app.url').'/img/og_img_may.webp')
            ->render();

        return view('index', compact('org'));
    }

    public function news()
    {
        $news = [
            [
                'title' => 'Субсидированные туры в Санкт-Петербург для Курских школьников',
                'excerpt' => 'Теперь школьникам Курска и Курской области доступны субсидированные групповые туры в Санкт-Петербург.',
                'img' => '/img/news/n1.jpg',
                'link' => 'https://spb.mirturizma46.ru/',
            ],

            [
                'title' => 'В Египте призвали запретить концерты возле пирамид в Гизе',
                'excerpt' => 'Министерство туризма и древностей Египта выступило против проведения концертов и шоу в непосредственной близости от пирамид в Гизе, заявив, что такие мероприятия могут нанести ущерб памятникам.',
                'img' => '/img/news/n2.jpg',
                'link' => 'https://www.tourdom.ru/news/v-egipte-prizvali-zapretit-kontserty-vozle-piramid-v-gize.html',
            ],
            [
                'title' => 'Туристам не нравится изменение правил посещения Абхазии для детей',
                'excerpt' => 'Новые правила въезда в Абхазию для детей, требующие нотариального согласия от второго родителя, вызвали недовольство среди туристов.',
                'img' => '/img/news/n3.png',
                'link' => 'https://www.tourdom.ru/news/turistam-ne-nravitsya-izmenenie-pravil-posescheniya-abkhazii-dlya-detey.html',
            ],
            [
                'title' => 'В Таиланде намерены скорректировать сроки безвиза для туристов',
                'excerpt' => 'Власти Таиланда рассматривают возможность изменения безвизового пребывания для туристов из различных стран, включая Россию.',
                'img' => '/img/news/n4.jpg',
                'link' => 'https://www.tourdom.ru/news/v-tailande-namereny-skorrektirovat-sroki-bezviza-dlya-turistov.html',
            ],
            [
                'title' => 'Аэрофлот обновил детское меню и наборы для маленьких пассажиров',
                'excerpt' => 'Авиакомпания «Аэрофлот» представила новое детское меню и улучшенные наборы для развлечений маленьких пассажиров на борту своих самолетов.',
                'img' => '/img/news/n5.webp',
                'link' => 'https://sakh.online/news/18/2025-10-27/aeroflot-obnovil-detskoe-menyu-i-nabory-dlya-malenkih-passazhirov-493167',
            ],
            [
                'title' => 'Utair предложила туристам сэкономить на рейсах в Дубай и Турцию',
                'excerpt' => 'Авиакомпания Utair запустила специальные тарифы и акции, позволяющие туристам сэкономить на перелетах в популярные направления — Дубай и Турцию.',
                'img' => '/img/news/n6.jpg',
                'link' => 'https://www.tourdom.ru/news/utair-predlozhila-turistam-sekonomit-na-reysakh-v-dubay-i-turtsiyu.html',
            ],
        ];

        return view('news', compact('news'));
    }
}
