<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeaHotelSeeder extends Seeder
{

    protected $data = [
        [
            'kurort_id' => 1,
            'kurort_name' => "Приморский",
            'title' => 'База отдыха «У моря»',
            'url' => 'https://www.mirturizma46.ru/baza-otdyxa-u-morya-feodosiya-p-primorskij/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/1_%D0%A2%D0%B5%D1%80%D1%80%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D1%8F-%D0%91%D0%B0%D0%B7%D1%8B-%D1%83-%D0%9C%D0%BE%D1%80%D1%8F_%D0%9F%D1%80%D0%B8%D0%BC%D0%BE%D1%80%D1%81%D0%BA%D0%B8%D0%B9.jpg',
        ],
        [
            'kurort_id' => 1,
            'kurort_name' => "Приморский",
            'title' => 'Вилла Нимфей',
            'url' => 'https://www.mirturizma46.ru/villa-nimfej/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/villa-nimfey.jpg',
        ],
        [
            'kurort_id' => 1,
            'kurort_name' => "Приморский",
            'title' => 'Вилла «Нимфей-2»',
            'url' => 'https://www.mirturizma46.ru/villa-nimfej-2/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/villa-nimfey2.jpg',
        ],

        // ------------------------------------
        [
            'kurort_id' => 2,
            'kurort_name' => "Береговое",
            'title' => 'Гостиница «Солнечный берег»',
            'url' => 'https://www.mirturizma46.ru/villa-nimfej-2/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/gostinitsa-solnechni-bereg.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 3,
            'kurort_name' => "Феодосия",
            'title' => 'Пансионат «Феодосия»',
            'url' => 'https://www.mirturizma46.ru/pansionat-feodosiya/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/pansionat-feodosia.jpg',
        ],

        [
            'kurort_id' => 3,
            'kurort_name' => "Феодосия",
            'title' => 'База отдыха «Светлая»',
            'url' => 'https://www.mirturizma46.ru/baza-otdyxa-svetlaya/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/baza-otdiha-svetlaya.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 4,
            'kurort_name' => "Коктебель",
            'title' => 'Коттеджный поселок Дим 2',
            'url' => 'https://www.mirturizma46.ru/katedzhnyj-poselok-dim-2/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/kotedzgni-poselok-dim2.jpg',
        ],
        [
            'kurort_id' => 4,
            'kurort_name' => "Коктебель",
            'title' => 'База отдыха «Андре»',
            'url' => 'https://www.mirturizma46.ru/baza-otdyxa-andre/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/baza-otdiha-andre.jpeg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 15,
            'kurort_name' => "Курортное",
            'title' => 'Отель «Аравана»',
            'url' => 'https://www.mirturizma46.ru/otel-aravana/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/otel-arovana-krim.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 5,
            'kurort_name' => "Судак",
            'title' => 'Гостевой дом «Отдых»',
            'url' => 'https://www.mirturizma46.ru/gostevoj-dom-otdyx/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2018/07/dom-otdih.jpg',
        ],
        [
            'kurort_id' => 5,
            'kurort_name' => "Судак",
            'title' => 'Отель «Дива»',
            'url' => 'https://www.mirturizma46.ru/otel-diva/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/otel-diva-sudak.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 6,
            'kurort_name' => "Морское",
            'title' => 'Мини-отель «Морской»',
            'url' => 'https://www.mirturizma46.ru/mini-otel-morskoj/',
            'img'=>'https://www.mirturizma46.ru/wp-content/uploads/2017/04/1_%D0%BC%D0%B8%D0%BD%D0%B8-%D0%BE%D1%82%D0%B5%D0%BB%D1%8C-%D0%9C%D0%BE%D1%80%D1%81%D0%BA%D0%BE%D0%B9_%D0%BF.%D0%9C%D0%BE%D1%80%D1%81%D0%BA%D0%BE%D0%B5.jpg'
        ],

        // ------------------------------------
        // ++++++++
        // ------------------------------------

        [
            'kurort_id' => 7,
            'kurort_name' => "Анапа",
            'title' => '«Белый лебедь» база отдыха',
            'url' => 'https://www.mirturizma46.ru/beliy-lebed-anapa/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2021/03/1-%D0%91%D0%B5%D0%BB%D1%8B%D0%B9-%D0%BB%D0%B5%D0%B1%D0%B5%D0%B4%D1%8C-%D0%B1%D0%B0%D0%B7%D0%B0-%D0%BE%D1%82%D0%B4%D1%8B%D1%85%D0%B0-%D0%90%D0%BD%D0%B0%D0%BF%D0%B0-1.jpg'
        ],
        [
            'kurort_id' => 7,
            'kurort_name' => "Анапа",
            'title' => '«Испанский дворик» гостевой дом',
            'url' => 'https://www.mirturizma46.ru/anapa-ispanskij-dvorik/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2023/04/%D0%90%D0%BD%D0%B0%D0%BF%D0%B0_%D0%98%D1%81%D0%BF%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9_%D0%B4%D0%B2%D0%BE%D1%80%D0%B8%D0%BA_%D0%B1%D0%B0%D1%81%D1%81%D0%B5%D0%B9%D0%BD-%D0%B4%D0%B2%D0%BE%D1%80.jpg',
        ],
        [
            'kurort_id' => 7,
            'kurort_name' => "Анапа",
            'title' => 'Гостевой дом «Афалина»',
            'url' => 'https://www.mirturizma46.ru/gstevoj-dom-afalina/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2018/03/Afalina-Anapa_01.jpg',
        ],
        [
            'kurort_id' => 7,
            'kurort_name' => "Анапа",
            'title' => '«Отель 34»',
            'url' => 'https://www.mirturizma46.ru/otel34/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2018/03/%D0%9E%D1%82%D0%B5%D0%BB%D1%8C34logo.jpg',
        ],
        [
            'kurort_id' => 7,
            'kurort_name' => "Анапа",
            'title' => 'Мини-отель «Сказка»',
            'url' => 'https://www.mirturizma46.ru/mini-otel-skazka/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/06/1_%D0%90%D0%BD%D0%B0%D0%BF%D0%B0_%D0%A1%D0%BA%D0%B0%D0%B7%D0%BA%D0%B0.jpg',
        ],
        [
            'kurort_id' => 7,
            'kurort_name' => "Анапа",
            'title' => 'Отель «Атлантида»',
            'url' => 'https://www.mirturizma46.ru/otel-atlantida/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/06/1_%D0%9E%D1%82%D0%B5%D0%BB%D1%8C-%D0%90%D1%82%D0%BB%D0%B0%D0%BD%D1%82%D0%B8%D0%B4%D0%B0_%D0%90%D0%BD%D0%B0%D0%BF%D0%B0.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 8,
            'kurort_name' => "Кабардинка",
            'title' => 'Отель «Морская звезда»',
            'url' => 'https://www.mirturizma46.ru/otel-morskaya-zvezda/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/otel-morskaya-zvezda.jpg',
        ],
        [
            'kurort_id' => 8,
            'kurort_name' => "Кабардинка",
            'title' => 'Санаторий «Жемчужина у моря»',
            'url' => 'https://www.mirturizma46.ru/sanatori-zgemchugina-u-morya/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/1_%D0%96%D0%B5%D0%BC%D1%87%D1%83%D0%B6%D0%B8%D0%BD%D0%B0-%D1%83-%D0%BC%D0%BE%D1%80%D1%8F_%D0%9A%D0%B0%D0%B1%D0%B0%D1%80%D0%B4%D0%B8%D0%BD%D0%BA%D0%B0.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 9,
            'kurort_name' => "Геленджик",
            'title' => 'Мини-отель «Роза»',
            'url' => 'https://www.mirturizma46.ru/mini-otel-roza/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2023/07/4.jpg',
        ],
        [
            'kurort_id' => 9,
            'kurort_name' => "Геленджик",
            'title' => 'Гостиница «Cказка на море»',
            'url' => 'https://www.mirturizma46.ru/gostinica-ckazka-na-more/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2018/04/%D0%93%D0%B5%D0%BB%D0%B5%D0%BD%D0%B4%D0%B6%D0%B8%D0%BA-%D0%A1%D0%BA%D0%B0%D0%B7%D0%BA%D0%B0-%D0%BD%D0%B0-%D0%BC%D0%BE%D1%80%D0%B5_01.jpg',
        ],
        [
            'kurort_id' => 9,
            'kurort_name' => "Геленджик",
            'title' => 'Гостевой дом «Асият»',
            'url' => 'https://www.mirturizma46.ru/gostevoj-dom-asiyat/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/gostevoy-don-asiyat.jpg',
        ],
        [
            'kurort_id' => 9,
            'kurort_name' => "Геленджик",
            'title' => 'Гостиница из сруба «Сосновый бор»',
            'url' => 'https://www.mirturizma46.ru/gostinitsa-sosnovi-bor/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/gostinitsa-sosnovi-bor.jpg',
        ],
        [
            'kurort_id' => 9,
            'kurort_name' => "Геленджик",
            'title' => 'Гостевой дом «Виктория»',
            'url' => 'https://www.mirturizma46.ru/gostevoj-dom-viktoriya/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2018/04/%D0%93%D0%B5%D0%BB%D0%B5%D0%BD%D0%B4%D0%B6%D0%B8%D0%BA_%D0%92%D0%B8%D0%BA%D1%82%D0%BE%D1%80%D0%B8%D1%8F_01.jpg',
        ],
        [
            'kurort_id' => 9,
            'kurort_name' => "Геленджик",
            'title' => 'Пансионат «Кубань»',
            'url' => 'https://www.mirturizma46.ru/pansionat-kuban/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/ponsionat-kuban.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 10,
            'kurort_name' => "Лермонтово",
            'title' => 'Гостиница «Бирюза»',
            'url' => 'https://www.mirturizma46.ru/gostinica-biryuza/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/07/%D0%91%D0%B8%D1%80%D1%8E%D0%B7%D0%B0_%D0%9B%D0%B5%D1%80%D0%BC%D0%BE%D0%BD%D1%82%D0%BE%D0%B2%D0%BE-%D0%BF%D0%B0%D0%BD%D0%BE%D1%80%D0%B0%D0%BC%D0%B0-%D0%BD%D0%B0-%D0%BE%D1%82%D0%B5%D0%BB%D1%8C-%D0%B8-%D0%B1%D0%B0%D1%81%D1%81%D0%B5%D0%B9%D0%BD.jpg',
        ],
        [
            'kurort_id' => 10,
            'kurort_name' => "Лермонтово",
            'title' => 'Авторский отель «Есенин»',
            'url' => 'https://www.mirturizma46.ru/avtorskij-otel-esenin/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2020/06/03-%D0%90%D0%B2%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D0%B5%D0%BB%D1%8C_%D0%95%D1%81%D0%B5%D0%BD%D0%B8%D0%BD_%D0%9B%D0%B5%D1%80%D0%BC%D0%BE%D0%BD%D1%82%D0%BE%D0%B2%D0%BE.jpg',
        ],
        [
            'kurort_id' => 10,
            'kurort_name' => "Лермонтово",
            'title' => 'Отель «Гранат»',
            'url' => 'https://www.mirturizma46.ru/otel-granat/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/06/1_%D0%93%D1%80%D0%B0%D0%BD%D0%B0%D1%82_%D0%9B%D0%B5%D1%80%D0%BC%D0%BE%D0%BD%D1%82%D0%BE%D0%B2%D0%BE.jpg',
        ],
        [
            'kurort_id' => 10,
            'kurort_name' => "Лермонтово",
            'title' => 'База отдыха «У моря»',
            'url' => 'https://www.mirturizma46.ru/baza-otdyxa-u-morya-lermontovo/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2022/07/%D0%91%D0%B0%D0%B7%D0%B0-%D0%BE%D1%82%D0%B4%D1%8B%D1%85%D0%B0-%D0%A3-%D0%BC%D0%BE%D1%80%D1%8F-%D0%B2-%D0%9B%D0%B5%D1%80%D0%BC%D0%BE%D0%BD%D1%82%D0%BE%D0%B2%D0%BE-%D0%BE%D1%82-%D0%9C%D0%B8%D1%80-%D0%A2%D1%83%D1%80%D0%B8%D0%B7%D0%BC%D0%B0-%D0%9A%D1%83%D1%80%D1%81%D0%BA-3-1024x682.jpg',
        ],

        // ------------------------------------
        [
            'kurort_id' => 11,
            'kurort_name' => "Новомихайловский",
            'title' => 'Гостиничный комплекс «Торнадо»',
            'url' => 'https://www.mirturizma46.ru/gostinichnyj-kompleks-tornado/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/2_%D0%A2%D0%BE%D1%80%D0%BD%D0%B0%D0%B4%D0%BE_%D0%9D%D0%BE%D0%B2%D0%BE%D0%BC%D0%B8%D1%85%D0%B0%D0%B9%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 12,
            'kurort_name' => "Дедеркой",
            'title' => 'Гостиница «Приморская Ракушка»',
            'url' => 'https://www.mirturizma46.ru/gostinica-primorskaya-rakushka/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/primorskaya-rakushka.png',
        ],
        // ------------------------------------
        [
            'kurort_id' => 13,
            'kurort_name' => "Лазаревское",
            'title' => 'Гостевой дом «МОРЕ & ГОРЫ»',
            'url' => 'https://www.mirturizma46.ru/gostevoj-dom-mig/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2018/04/1_%D0%9B%D0%B0%D0%B7%D0%B0%D1%80%D0%B5%D0%B2%D1%81%D0%BA%D0%BE%D0%B5_%D0%9C%D0%98%D0%93.jpg',
        ],
        [
            'kurort_id' => 13,
            'kurort_name' => "Лазаревское",
            'title' => 'Гостевой дом «Горизонт»',
            'url' => 'https://www.mirturizma46.ru/gostevoj-dom-gorizont/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/06/1_%D0%93%D0%BE%D1%80%D0%B8%D0%B7%D0%BE%D0%BD%D1%82_%D0%9B%D0%B0%D0%B7%D0%B0%D1%80%D0%B5%D0%B2%D1%81%D0%BA%D0%BE%D0%B5.jpg',
        ],
        [
            'kurort_id' => 13,
            'kurort_name' => "Лазаревское",
            'title' => 'Гостиница «TerraCotta»',
            'url' => 'https://www.mirturizma46.ru/gostinica-terracotta/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/gostinitsa-terracota.jpg',
        ],
        // ------------------------------------
        [
            'kurort_id' => 14,
            'kurort_name' => "Адлер",
            'title' => '«Бархатные сезоны» город-отель',
            'url' => 'https://www.mirturizma46.ru/barxatnye-sezony-gorod-otel/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/barhatniSezon.png',
        ],
        [
            'kurort_id' => 14,
            'kurort_name' => "Адлер",
            'title' => 'AZIMUT Hotel Sochi 3*',
            'url' => 'https://www.mirturizma46.ru/azimut-hotel-sochi-3-adler/',
            'img' => 'https://www.mirturizma46.ru/wp-content/uploads/2017/04/AZIMUT-Hotel-Sochi.jpg',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            $file = 'sea/'.basename($item['img']);

            Storage::disk('public')->put($file, file_get_contents($item['img']), 'public');

            // DB::table("sea_hotels")->insert(
            //     [
            //         'title' => $item['title'],
            //         'slug' => Str::slug($item['title']),
            //         'sea_kurort_id' => $item['kurort_id'],
            //         'img' => $file,
            //     ]
            // );
        }
    }
}
