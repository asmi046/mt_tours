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
            $table->timestamps();
            $table->foreignId('sea_kurort_id')->constrained();
            $table->string('title')->comment('Название отеля');
            $table->string('slug')->unique()->comment('Слаг');
            $table->string('img')->nullable()->comment('Основное изображение');
            $table->string('geo')->nullable()->comment('GEO координаты');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('in_price')->nullable()->comment('В цену входит');
            $table->json('galery')->nullable()->comment('Галерея');
            $table->json('price')->nullable()->comment('Цены');
            $table->json('section_description')->nullable()->comment('Описание по секциям');
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
