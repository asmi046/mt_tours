<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TourSeederNewYear extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                'actual' => false,
                'order' => 13,
                'dir' => 'ny_bz',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодняя Знаменская Богатырская застава',
                'slug' => "Новогодняя Богатырская застава",
                'deys' => 1,
                'img' => "5_Богатырская-застава-тур-из-Курска-от-Мир-Туризма-1.jpeg",
                'start_data'=> "01.05.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-12-01"],
                    ["#" => null,"start_data" => "2025-12-08"]
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 3400 , 'comment' => '1 декабря (дети до 16 лет)'],
                    ['price' => 3600, 'comment' => '1 декабря (взрослые)'],

                ],
                'galery' => [
                    ['img' => "5_6dc89468-4741-46bd-be65-bd98c2b9df54.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5_9c7d1934-11fc-4bef-9d46-e79d8f4a8c89.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5_Hutor_Pesochnoe-2.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5_Hutor_Pesochnoe-6.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5_Hutor_Pesochnoe-7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "5_Богатырская-застава-тур-из-Курска-от-Мир-Туризма-1.jpeg", 'title' => "", 'in_top' => false],
                    ['img' => "5_Богатырская-застава-тур-из-Курска-от-Мир-Туризма-2.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "5_Богатырская-застава-тур-из-Курска-от-Мир-Туризма-6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "5_Богатырская-застава-тур-из-Курска-от-Мир-Туризма-9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "5_Богатырская-застава-тур-из-Курска-от-Мир-Туризма-11.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "5_Знаменская-Богатырская-застава-из-Курска-от-Мир-Туризма-www.mirturizma46.ru-5.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 14,
                'dir' => 'ny_gastro',
                'template_name' => 'template.new_year_page',
                'title' => 'ГастроТур «Сыр. Хлеб и Вино» (Новогодний тур) Новый год 2026',
                'slug' => "ГастроТур «Сыр. Хлеб и Вино»",
                'deys' => 1,
                'img' => "3.jpg",
                'start_data'=> "06.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-06"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 5600 , 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "С новым Годом!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Немецкая хлебопекарня", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "Немецкая хлебопекарня", 'in_top' => false],
                    ['img' => "5.jpg", 'title' => "Немецкий Штолен", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Вкус Нового года!", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Вкус праздника!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Новогодняя выпечка", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Сырная ферма", 'in_top' => true],
                    ['img' => "10.jpg", 'title' => "Сырная ферма", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Сырная ферма", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Добрые моменты", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Винодельня", 'in_top' => true],
                    ['img' => "14.jpg", 'title' => "Будет интересно всем", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 15,
                'dir' => 'ny_tula',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодняя Тула! Рождество в Туле! Город оружейников! Пряников! И самоваров!',
                'slug' => "Новогодняя Тула! Рождество в Туле!",
                'deys' => 1,
                'img' => "2.jpg",
                'start_data'=> "07.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-07"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 3800 , 'comment' => 'Детям до 16 лет'],
                    ['price' => 3900 , 'comment' => '']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "С новым Годом!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Новогодняя Тула", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Яркие эмоции!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Будет интересно всем", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Незабываемый тур", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Минуты счастья!", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "С Новым Годом!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Яркие эмоции", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "История вокруг", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Чудесная прогулка", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Интересные музеи!", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Тульский самовар", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Новогодняя красота", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Памятные моменты", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Тульские пряники", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 16,
                'dir' => 'ny_navka',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогоднее Ледовое Шоу Татьяны Навка "Щелкунчик"',
                'slug' => "Новогоднее Ледовое Шоу Татьяны Навка «Щелкунчик»",
                'deys' => 1,
                'img' => "6.jpg",
                'start_data'=> "05.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-04"],
                    ["#" => null, "start_data" => "2026-01-05"],
                    ["#" => null, "start_data" => "2026-01-06"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 9000 , 'comment' => 'Детям до 16 лет'],
                    ['price' => 9500 , 'comment' => 'стандарт']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Ледовое Шоу", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "3.jpg", 'title' => "Яркое представление!", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "Новогодняя классика", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Гуляния", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Бизнес-сити", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Новогодний каток", 'in_top' => true],
                    ['img' => "8.jpg", 'title' => "Новогодняя ярмарка", 'in_top' => true],
                    ['img' => "9.png", 'title' => "Щелкунчик", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Москва", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Потрясающее Шоу", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Новогодняя столица", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 17,
                'dir' => 'ny_voronez',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогоднее путешествие для всей семьи в Воронеж. Альпаки, хаски и океанариум.Новый год 2025',
                'slug' => "Новогоднее путешествие для всей семьи в Воронеж",
                'deys' => 1,
                'img' => "12.jpg",
                'start_data'=> "07.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-07"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  1, 'comment' => ''],
                    ['price' =>  0, 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.png", 'title' => "Добрые моменты!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Будет интересно всем", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "Добрые события", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Счастья всем!", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Новогодние воспоминания", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Подводный мир", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "С Новым Годом!", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Морские обитатели", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Новогодние впечатления", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Минуты счастья", 'in_top' => true],
                    ['img' => "12.jpg", 'title' => "Эти глаза )))", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "С новым Годом!", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 18,
                'dir' => 'ny_gora',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодняя Кудыкина Гора',
                'slug' => "Новогодняя Кудыкина Гора",
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "05.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-05"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  2500, 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Кудыкина гора!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Скифская крепость", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Зимние забавы", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "Яркие эмоции", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Катание на упряжке", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Для детей и взрослых", 'in_top' => false],
                    ['img' => "7.png", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Будет интересно", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Народные забавы", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Кудыкина гора", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 19,
                'dir' => 'ny_moscow',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодняя Москва (Новогодний тур) Новый год 2025',
                'slug' => "Новогодняя Москва",
                'deys' => 1,
                'img' => "2.jpg",
                'start_data'=> "07.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-07"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  2500, 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Добрые моменты!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Я ❤ тебя Москва", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Минуты счастья", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "С новым Годом!", 'in_top' => false],
                    ['img' => "5.webp", 'title' => "Незабываемый тур", 'in_top' => true],
                    ['img' => "6.jpg", 'title' => "Добрые события", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "❄️ С Новым Годом!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Будет интересно всем", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Новогодние Ярмарки", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Москва сити", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Национ. центр Россия", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Вперёд к звездам!", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Космос", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Новые технологии", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "Прикоснись к будущему", 'in_top' => false],
                    ['img' => "16.jpg", 'title' => "Будущее России!", 'in_top' => true],
                    ['img' => "17.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "18.jpg", 'title' => "Будущее наступило", 'in_top' => false],
                    ['img' => "19.jpg", 'title' => "Мега впечатления", 'in_top' => false],
                    ['img' => "20.jpg", 'title' => "Вперёд Россия!", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 20,
                'dir' => 'ny_adigea',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодняя Адыгея 2026 🎄(Новогодний тур) Новый год 2026',
                'slug' => "Новогодняя Адыгея",
                'deys' => 3,
                'img' => "1.jpg",
                'start_data'=> "03.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-07"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 20000 , 'comment' => 'Детям до 16 лет'],
                    ['price' => 21000 , 'comment' => 'Взрослые']
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "С новым Годом!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Потрясающие виды", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Минуты счастья", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Новогодняя Адыгея", 'in_top' => false],
                    ['img' => "5.jpg", 'title' => "Добрые события!", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Незабываемый тур", 'in_top' => true],
                    ['img' => "7.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Горный воздух", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Фантастические виды", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Добрые моменты!", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Минуты счастья", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Нетронутая природа", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Неповторимые виды", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Нереальные впечатления", 'in_top' => false],
                    ['img' => "15.jpg", 'title' => "С Новым Годом!", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 21,
                'dir' => 'ny_chocolad',
                'template_name' => 'template.new_year_page',
                'title' => 'Шоколадное путешествие + замок принцессы (Новогодний тур) Новый год 2026',
                'slug' => "Шоколадное путешествие",
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "03.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-03"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' => 4800 , 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Минуты счастья", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Итальян. шоколад", 'in_top' => false],
                    ['img' => "3.jpg", 'title' => "Бельгийский шок", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "Незабываемый тур", 'in_top' => false],
                    ['img' => "5.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Замок принцессы!", 'in_top' => true],
                    ['img' => "7.jpg", 'title' => "Яркие эмоции!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Новогодние праздники", 'in_top' => true],
                    ['img' => "9.jpg", 'title' => "Прикоснись к истории", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Добрые моменты!", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Яркие воспоминания", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Связь времён", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Всем добра!", 'in_top' => false],
                    ['img' => "14.jpg", 'title' => "Шоколадные традиции", 'in_top' => true],
                    ['img' => "15.png", 'title' => "Атмосфера счастья", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 22,
                'dir' => 'ny_belarus',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодняя Беларусь Минск + резиденция Деда мороза в Беловежской пуще',
                'slug' => "Новогодняя Беларусь",
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "03.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-03"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  1, 'comment' => ''],
                ],
                'galery' => [
                   ['img' => "1.jpg", 'title' => "С новым Годом!", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Незабываемый тур", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Яркие эмоции!", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "5.jpg", 'title' => "Добрые события", 'in_top' => true],
                    ['img' => "6.jpg", 'title' => "Минуты счастья", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "С Новым Годом!", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Добрые моменты!", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 23,
                'dir' => 'ny_krim',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогоднее путешествие в Крым.Севастополь - Херсонес-Таврический - Инкерман',
                'slug' => "Новогоднее путешествие в Крым",
                'deys' => 3,
                'img' => "2.jpg",
                'start_data'=> "04.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-04"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  1, 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Минуты счастья", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "С новым Годом!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Незабываемый тур", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Исторические места", 'in_top' => false],
                    ['img' => "5.jpg", 'title' => "С Новым Годом!", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Интересные локации", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Минуты счастья", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Добрые события", 'in_top' => true],
                    ['img' => "9.jpg", 'title' => "Яркие впечатления", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Добрые моменты!", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 24,
                'dir' => 'ny_elka',
                'template_name' => 'template.new_year_page',
                'title' => 'Тур на Кремлёвскую Ёлку',
                'slug' => "Тур на Кремлёвскую Ёлку",
                'deys' => 1,
                'img' => "2.jpg",
                'start_data'=> "29.12.2025",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2025-12-29"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  1, 'comment' => ''],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Минуты счастья", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "С новым Годом!", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Незабываемый тур", 'in_top' => false],
                    ['img' => "4.jpg", 'title' => "Яркие эмоции!", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "С Новым Годом!", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Новогодняя елка", 'in_top' => true],
                    ['img' => "7.jpg", 'title' => "Минуты счастья", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Добрые события", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Яркие впечатления", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Добрые моменты!", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 25,
                'dir' => 'ny_krasnaya',
                'template_name' => 'template.new_year_page',
                'title' => 'Горнолыжный тур в Красную поляну',
                'slug' => "Горнолыжный тур в Красную поляну",
                'deys' => 5,
                'img' => "2.jpg",
                'start_data'=> "17.02.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-02-17"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  25000, 'comment' => ''],
                    ['price' =>  28000, 'comment' => '1-местное размещение (без подселения)'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "11.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "12.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "13.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 26,
                'dir' => 'ny_gorki57',
                'template_name' => 'template.new_year_page',
                'title' => 'Поездки в Горки 57',
                'slug' => "Поездки в Горки 57",
                'deys' => 1,
                'img' => "2.jpg",
                'start_data'=> "04.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-04"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  2500, 'comment' => 'Взрослый'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "10.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 27,
                'dir' => 'ny_pronino',
                'template_name' => 'template.new_year_page',
                'title' => 'Едем в Пронино',
                'slug' => "Едем в Пронино",
                'deys' => 1,
                'img' => "1.jpg",
                'start_data'=> "04.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-04"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  2000, 'comment' => 'Взрослый'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "Описание 1", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "Описание 1", 'in_top' => false],
                    ['img' => "9.jpg", 'title' => "Описание 1", 'in_top' => false],
                ]
            ],
            [
                'actual' => false,
                'order' => 28,
                'dir' => 'ny_kareliya',
                'template_name' => 'template.new_year_page',
                'title' => 'Новогодний тур в Карелию',
                'slug' => "Новогодний тур в Карелию",
                'deys' => 4,
                'img' => "1.jpg",
                'start_data'=> "02.01.2026",
                'multi_data' => json_encode([
                    ["#" => null, "start_data" => "2026-01-02"],
                ]),
                'page_bg' => 'moskow_bg',
                'prices' => [
                    ['price' =>  1, 'comment' => 'Уточняйте стоимость у менеджеров'],
                ],
                'galery' => [
                    ['img' => "1.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "2.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "3.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "4.jpg", 'title' => "", 'in_top' => true],
                    ['img' => "5.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "6.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "7.jpg", 'title' => "", 'in_top' => false],
                    ['img' => "8.jpg", 'title' => "", 'in_top' => false],
                ]
            ],

        ];

        $index = 0;
        foreach ($data as $item) {

            $main_img = "tours/".$index."_".$item['img'];
            Storage::disk('public')->put($main_img, file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$item['img'])), 'public');
            $inserted_galery = [];

            foreach ($item['galery'] as $galery_item) {
                Storage::disk('public')->put("tours/".$index."_".$galery_item['img'], file_get_contents(public_path('tour_info/'.$item['dir'].'/img/'.$galery_item['img'])), 'public');
                $galery_item['img'] = "tours/".$index."_".$galery_item['img'];
                $inserted_galery[] = $galery_item;
            }

            if (isset($item['video'])) {
                Storage::disk('public')->put("tours/".$index."_".$item['dir'].".mp4", file_get_contents(public_path('tour_info/'.$item['dir'].'/'.$item['video'])), 'public');
            }

            $inserted_item = [
                'order' => $item['order'],
                'template_name' => $item['template_name'],
                'header_bg' => isset($item['video'])?"tours/".$index."_".$item['dir'].".mp4":null,
                'out_lnk' => isset($item['out_lnk'])?$item['out_lnk']:null,
                'page_bg' => isset($item['page_bg'])?$item['page_bg']:null,
                'title' => $item['title'],
                'title_input' => $item['title'],
                'slug' => Str::slug($item['slug']),
                'img' => $main_img,
                'deycount' => $item['deys'],
                'start_data' => date("Y-m-d", strtotime($item['start_data'])),
                'multi_data' => isset($item['multi_data'])?$item['multi_data']: null ,
                'top_description' => file_get_contents(public_path('tour_info/'.$item['dir'].'/top.html')),
                'program' => file_get_contents(public_path('tour_info/'.$item['dir'].'/program.html')),
                'in_price' => file_exists(public_path('tour_info/'.$item['dir'].'/in_price.html'))?file_get_contents(public_path('tour_info/'.$item['dir'].'/in_price.html')):null,
                'out_price' => file_exists(public_path('tour_info/'.$item['dir'].'/out_price.html'))?file_get_contents(public_path('tour_info/'.$item['dir'].'/out_price.html')):null,
                'galery' => json_encode($inserted_galery),
                'prices' => json_encode($item['prices'])
            ];

            $index ++;
            DB::table("seo_data")->insert(
                [
                    'url' => 'tours/'.Str::slug($item['title']),
                    'seo_title' => $item['title'],
                    'seo_description' => $item['title'],
                ]
            );
            DB::table("tours")->insert($inserted_item);
        }

    }
}
