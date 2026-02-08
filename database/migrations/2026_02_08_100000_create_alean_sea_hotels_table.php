<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alean_sea_hotels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sea_destination_id')->comment('Связь с таблицей Направления');
            $table->unsignedBigInteger('sea_resort_id')->comment('Связь с таблицей Курорт');
            $table->string('CID')->comment('CID отеля');
            $table->string('title')->comment('Заголовок');
            $table->string('slug')->comment('Slug');
            $table->string('geo')->nullable()->comment('Координаты отеля');
            $table->integer('sort_order')->default(0)->comment('Порядок вывода');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('short_description')->nullable()->comment('Краткое описание');
            $table->json('gallery')->nullable()->comment('Галерея');
            $table->json('parameters')->nullable()->comment('Параметры');
            $table->float('before_5_price')->nullable()->comment('Цена до 5 лет');
            $table->float('before_12_price')->nullable()->comment('Цена до 12 лет');
            $table->json('number_prices')->nullable()->comment('Цены на номера');
            $table->string('img')->nullable()->comment('Изображение отеля');
            $table->float('min_price')->nullable()->comment('Минимальная цена');
            $table->string('sea_distantion')->nullable()->comment('Расстояние до моря');
            $table->text('numbers_type')->nullable()->comment('Типы номеров');
            $table->string('bus_direction')->nullable()->comment('Направление автобуса');
            $table->text('in_price')->nullable()->comment('Что входит в стоимость');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alean_sea_hotels');
    }
};
