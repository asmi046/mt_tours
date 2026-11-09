# AGENTS.md — mt_tours

Файл для ИИ-агентов, работающих с этим проектом. Проект на русском языке — документация и комментарии пишем по-русски.

## Обзор проекта

**mt_tours** — сайт туристического агентства «МирТуризма46» (продакшен-домен `mirturizma46.ru`). Это монолит на Laravel 12 (проверено: 12.61.1) с серверным рендерингом на Blade, админ-панелью MoonShine 3 и фронтенд-сборкой на Vite 6 + Vue 3.

Основные разделы сайта: автобусные туры (в т.ч. школьные), туры на море (направления / курорты / отели / график заездов / покупка проезда), санатории, зарубежные туры (zagran), ж/д билеты, календарь туров, отзывы, новости, YML-фид и sitemap.xml.

Ключевые интеграции:
- **Alean API** — загрузка туров и отелей туроператора (консольные команды `alean:get-*`, сервис `App\Services\AleanApiService`).
- **Тинькофф Платёжный шлюз** — оплата заказов (`App\Services\TinkoffPayService`, `PayOrder` модель, маршруты в `routes/pay_order.php`).
- **Telegram / VK / SMS** — уведомления и интеграции (`App\Services\TelegramSendServices`, `VkServices`, конфиги `telegram.php`, `vk.php`, `sms.php`).
- **MoonShine 3** — админ-панель (`+ moonshine/ru`, `moonshine/tinymce`).

Свои пакеты автора проекта: `asmi046/laravel-jsonld` (разметка JSON-LD), `asmi046/site_skelet` (dev-зависимость).

## Технологический стек

- **Backend**: PHP ^8.2, Laravel ^12.0, Sanctum, Guzzle, Intervention Image 3.
- **Admin**: MoonShine 3 (`app/MoonShine/Resources`, `app/MoonShine/Pages`).
- **Frontend**: Vite 6, Vue 3 (`@vitejs/plugin-vue`), Bulma (SCSS), Swiper, GSAP, fslightbox, axios + vue-axios.
- **БД**: MySQL (продакшен); на машине разработчика в корне лежит файл `mt_tours` — старая SQLite-база, не используется приложением.
- **Очереди**: `sync` по умолчанию; таблица `jobs` есть, планировщик гоняет `queue:work` (см. ниже).

## Структура кода

- `app/Http/Controllers` — контроллеры публичной части (`SeaController`, `TourController`, `SanatoriController`, `ZagranController`, `TicketController`, `PayOrderController`, `FeedController`, `SitemapController` и др.).
- `app/Services` — бизнес-логика и внешние интеграции (`AleanApiService`, `TinkoffPayService`, `SeoServices`, `SeaDataService`, `FeedServices`, `TelegramSendServices`, `VkServices`, `ClientServices`, `CalendarServices`).
- `app/Models` — модели, включая доменные (`Tour`, `SeaHotel`, `SeaResort`, `SeaDestination`, `ZagranResort`, `ScholTour`, `BusCatalog`, `PayOrder`, `Client`, `SeoData`, `Page`, `Review`, `Slider`, `Faq`).
- `app/Console/Commands` — парсеры и загрузчики данных (`AleanGetTours`, `AleanGetHotels`, `AleanGetCountries`, `AleanGetResorts`, `ParseHotelPage`, `ParseSchoolTours`).
- `app/MoonShine/Resources` — ресурсы админ-панели (Tour, Page, SeoData, Review, Calendar, Slider и др.).
- `app/helpers/allHelpers.php` — глобальные хелперы (например `seo_data()`, `echo_days()`), подключаются через `App\Providers\HelpersLoadProvider`. Новые глобальные функции добавлять сюда и оборачивать в `if (! function_exists(...))`.
- `resources/views` — Blade-шаблоны: `layouts/` (`all.blade.php` — основной лейаут), `components/` (большая библиотека повторно используемых блоков), директории разделов (`sea/`, `sanatori/`, `zagran/`, `schol/`, `ticket/`, `pay/` и др.).
- `resources/js` — JS/Vue: `app.js`, `components/`, `sliders/`, `animation/`, `cart.js`, `modal*.js`.
- `public/scss/main.scss` — сторонний точек входа Vite наряду с `resources/css/app.css` и `resources/js/app.js` (см. `vite.config.js`).

### Маршруты

`routes/web.php` почти пуст — реальные маршруты разнесены по файлам, которые регистрируются в `app/Providers/RouteServiceProvider.php`: `asmi_all.php` (главная, туры, страницы, отзывы, календарь, фид, sitemap), `asmi_consultation.php`, `pay_order.php`, `ticket.php`, `sea.php`, `zagran.php`, `sanatori.php`, `api.php` (только Sanctum `/user`). Новые публичные маршруты добавлять в соответствующий тематический файл, а не в `web.php`.

### Конфиги проекта

Необычные конфиги в `config/`: `alean.php` (API туроператора), `asmiseo.php` (SEO-заголовки/постфиксы, значения по умолчанию — «МирТуризма46»), `pay.php`, `consultation.php`, `contacts.php`, `sales.php`, `sms.php`, `telegram.php`, `vk.php`, `snow.php`, `proxy.php`. Локаль приложения — `ru` (`config/app.php`).

### Особенности архитектуры

- Проект использует **старую структуру Laravel** (с `app/Http/Kernel.php`, `app/Console/Kernel.php` и `RouteServiceProvider`), несмотря на Laravel 12 в `composer.json`. Не пытайтесь «перевести» проект на streamlined-сkeleton (`bootstrap/app.php` с хуками) — это осознанное состояние.
- Планировщик (`app/Console/Kernel.php`): `queue:work --max-time=300` с `withoutOverlapping()`.
- Миграции часто «наращивают» таблицы полями (`add_fields_*`, `chenge_*` — опечатки в именах файлов исторические, не исправлять без необходимости). Контент наполняется сидерами: в `database/seeders` десятки сидеров под каждую сущность/раздел (включая сидеры контента курортов по странам).

## Команды сборки и разработки

```bash
# PHP-зависимости
composer install

# Фронтенд
npm install
npm run dev        # Vite dev-сервер
npm run build      # продакшен-сборка в public/build

# Artisan-задачи
php artisan migrate
php artisan db:seed                # общий DatabaseSeeder
php artisan db:seed SeaGroupSeeder # отдельные сидеры (их много)
php artisan alean:get-tours        # загрузка туров из Alean API
php artisan alean:get-hotels

# Тесты и стиль
php artisan test                   # PHPUnit 11
vendor/bin/pint                    # Laravel Pint (стандарт Laravel, pint.json нет)
```

## Деплой

Деплой выполняется набором npm-скриптов, которые по SSH работают с сервером `u1731342@31.31.198.62`, каталог `www/mirturizma46.ru`, PHP на сервере — `/opt/php/8.4/bin/php`:

```bash
npm run deploy_m   # vite build + отправка public/build (scp) + git pull + optimize/clear кэшей + chmod 775 на build
```

Сопутствующие скрипты: `pull_rep`, `send_vite_build`, `migrate_rep`, `rollback_rep`, `seed_rep_one*`, `cache_config`/`cache_route`/`cache_view`/`cache_clear`, `optimize_all`, `storage_link`, `alean_tour`, `alean_hotel`. Готовая сборка фронта коммитится/отправляется отдельно от `git pull` — деплой фронта и бэкенда независимы.

> Внимание: npm-скрипты содержат SSH-цель и парсер-команды с захардкоженными данными. Не публикуйте эти скрипты наружу и не меняйте целевой сервер без согласования.

## Тестирование

- PHPUnit 11, конфигурация в `phpunit.xml`; тесты в `tests/Unit` и `tests/Feature`.
- Тестовое окружение: `APP_ENV=testing`, драйверы `array`, очередь `sync`; подключение к sqlite в `phpunit.xml` закомментировано (тесты идут против настроенного в `.env` подключения — учитывайте это).
- Реального покрытия почти нет — лежат только шаблонные `ExampleTest.php`. **Не создавайте новые тесты, только если задача явно этого не требует**, но если пишете тест — помещайте его в соответствующий suite (`Unit`/`Feature`) и прогоняйте `php artisan test`.

## Соглашения по коду

- Язык проекта — русский: UI-тексты, имена маршрутов (`sea_home`, `grafik_zaezdov`), сидеры и комментарии — на русском. Сохраняйте это.
- Код-стиль — стандартный Laravel (Laravel Pint); PSR-4-автозагрузка `App\` → `app/`.
- SEO обязателен на публичных страницах: используйте модель `SeoData` и хелпер `seo_data()` (см. `app/helpers/allHelpers.php`), а также JSON-LD через `asmi046/laravel-jsonld`.
- Изображения обрабатываются через Intervention Image 3; публичные загрузки — через `storage:link` (каталоги `public/img`, `public/program`, `public/bus_base` и др. — наполняются контентом).
- Публичные маршруты добавлять в тематические файлы `routes/*.php` (регистрация — в `RouteServiceProvider`), имена маршрутов — snake_case на русском/английском в существующем стиле.

## Безопасность

- `.env` не коммитится (в `.gitignore`); при добавлении настроек продублируйте ключ в `.env.example` без значений.
- Платёжные и внешние ключи (Тинькофф, Telegram, VK, SMS, Alean) хранятся в `.env` / соответствующих конфигах — никогда не вносите реальные значения в код или репозиторий.
- CSRF-проверка включена (`VerifyCsrfToken`) для web-группы; Sanctum подключён, но почти не используется (только `/api/user`).
- В репозитории есть точки входа без авторизации (`/cache_clear` вызывает `optimize:clear`) — не удаляйте и не расширяйте подобные маршруты без согласования.

## Что стоит знать агенту

- `promts/` — архив промптов разработчика для прошлых задач (на русском); полезен как история решений, но не является документацией.
- Файл `mt_tours` в корне — брошенная SQLite-база разработки, приложением не используется.
- `routes/console.php`, `app/Events`, `app/Listeners`, `app/Mail` — шаблонные/минимальные, не переусложняйте.
- Перед коммитом проверяйте `git status`: сборки Vite (`public/build`) и логи не должны попадать в коммит, если это не осознанный деплой через `npm run deploy_m`.
