<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alean_tours', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('offerId')->comment('Суррогатный ID тура');
            $table->string('tourName', 800)->comment('Название тура');
            $table->string('tourCID')->comment('Уникальный код тура');
            $table->dateTime('checkInDate')->comment('Дата/время заезда');
            $table->dateTime('checkOutDate')->comment('Дата/время выезда');
            $table->unsignedInteger('hotelId')->comment('ID отеля');
            $table->string('hotelCID')->comment('Уникальный код отеля');
            $table->string('hotelUrl')->nullable()->comment('URL отеля');
            $table->unsignedInteger('resortId')->comment('ID курорта');
            $table->unsignedInteger('hotelCategoryId')->nullable()->comment('Категория отеля');
            $table->unsignedInteger('mealId')->comment('ID питания');
            $table->string('mealCode')->comment('Код питания');
            $table->string('htPlaceName')->comment('Размещение в номере');
            $table->string('roomTypeName')->comment('Тип номера');
            $table->date('tourDate')->comment('Дата начала тура');
            $table->unsignedInteger('nights')->comment('Количество ночей');
            $table->unsignedInteger('price')->comment('Цена тура');
            $table->unsignedInteger('hotelPrice')->comment('Цена размещения');
            $table->unsignedTinyInteger('hotelIsInStop')->comment('Наличие мест');
            $table->unsignedTinyInteger('ticketsIncluded')->comment('Билеты включены');
            $table->unsignedTinyInteger('hasEconomTicketsDpt')->comment('Эконом туда');
            $table->unsignedTinyInteger('hasEconomTicketsRtn')->comment('Эконом обратно');
            $table->unsignedTinyInteger('hasBusinessTicketsDpt')->comment('Бизнес туда');
            $table->unsignedTinyInteger('hasBusinessTicketsRtn')->comment('Бизнес обратно');
            $table->integer('fewPlacesInHotel')->nullable()->comment('Мало мест в отеле');
            $table->integer('fewTicketsDptY')->nullable()->comment('Мало эконом туда');
            $table->integer('fewTicketsRtnY')->nullable()->comment('Мало эконом обратно');
            $table->integer('fewTicketsDptB')->nullable()->comment('Мало бизнес туда');
            $table->integer('fewTicketsRtnB')->nullable()->comment('Мало бизнес обратно');
            $table->unsignedBigInteger('flags')->nullable()->comment('Флаги тура');
            $table->text('description')->nullable()->comment('Описание тура');
            $table->string('receivingParty')->nullable()->comment('Принимающая сторона');
            $table->string('earlyBookingValidTill')->nullable()->comment('Раннее бронирование до');
            $table->string('finder')->nullable()->comment('Параметры поиска');
            $table->string('line')->nullable()->comment('ID наземной части');
            $table->string('tline')->nullable()->comment('ID перевозки');
            $table->string('trline')->nullable()->comment('ID трансфера');
            $table->unsignedTinyInteger('medical')->nullable()->comment('Лечение (1/0)');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alean_tours');
    }
};
