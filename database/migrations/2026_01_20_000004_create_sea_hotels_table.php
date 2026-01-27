<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sea_hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sea_destination_id')->constrained()->onDelete('cascade')->comment('Связь с таблицей Направления');
            $table->foreignId('sea_resort_id')->constrained()->onDelete('cascade')->comment('Связь с таблицей Курорт');
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

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_hotels');
    }
};
