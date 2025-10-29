<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function news() {
        $news = [
            [
                'title' => 'Субсидированные туры в Санкт-Петербург для Курских школьников',
                'excerpt' => 'Теперь школьникам Курска и Курской области доступны субсидированные групповые туры в Санкт-Петербург.',
                'img'   => '/img/news/n1.jpg',
                'link' => 'https://spb.mirturizma46.ru/'
            ],

            [
                'title' => 'В Египте призвали запретить концерты возле пирамид в Гизе',
                'excerpt' => 'Министерство туризма и древностей Египта выступило против проведения концертов и шоу в непосредственной близости от пирамид в Гизе, заявив, что такие мероприятия могут нанести ущерб памятникам.',
                'img'   => '/img/news/n2.jpg',
                'link' => 'https://www.tourdom.ru/news/v-egipte-prizvali-zapretit-kontserty-vozle-piramid-v-gize.html'
            ],
            [
                'title' => 'Туристам не нравится изменение правил посещения Абхазии для детей',
                'excerpt' => 'Новые правила въезда в Абхазию для детей, требующие нотариального согласия от второго родителя, вызвали недовольство среди туристов.',
                'img'   => '/img/news/n3.png',
                'link' => 'https://www.tourdom.ru/news/turistam-ne-nravitsya-izmenenie-pravil-posescheniya-abkhazii-dlya-detey.html'
            ],
            [
                'title' => 'В Таиланде намерены скорректировать сроки безвиза для туристов',
                'excerpt' => 'Власти Таиланда рассматривают возможность изменения безвизового пребывания для туристов из различных стран, включая Россию.',
                'img'   => '/img/news/n4.jpg',
                'link' => 'https://www.tourdom.ru/news/v-tailande-namereny-skorrektirovat-sroki-bezviza-dlya-turistov.html'
            ],
            [
                'title' => 'Аэрофлот обновил детское меню и наборы для маленьких пассажиров',
                'excerpt' => 'Авиакомпания «Аэрофлот» представила новое детское меню и улучшенные наборы для развлечений маленьких пассажиров на борту своих самолетов.',
                'img'   => '/img/news/n5.webp',
                'link' => 'https://sakh.online/news/18/2025-10-27/aeroflot-obnovil-detskoe-menyu-i-nabory-dlya-malenkih-passazhirov-493167'
            ],
            [
                'title' => 'Utair предложила туристам сэкономить на рейсах в Дубай и Турцию',
                'excerpt' => 'Авиакомпания Utair запустила специальные тарифы и акции, позволяющие туристам сэкономить на перелетах в популярные направления — Дубай и Турцию.',
                'img'   => '/img/news/n6.jpg',
                'link' => 'https://www.tourdom.ru/news/utair-predlozhila-turistam-sekonomit-na-reysakh-v-dubay-i-turtsiyu.html'
            ]
        ];
        return view('news', compact('news'));
    }
}
