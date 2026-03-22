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
        Schema::create('zagran_destinations', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('title')->comment('Заголовок');
            $table->string('name')->comment('Название курорта');
            $table->string('img', 600)->nullable()->comment('Изображение');
            $table->string('flag', 600)->nullable()->comment('Флаг страны');
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('slug')->unique()->comment('Слаг для ссылки');
            $table->string('departure_cities')->nullable()->comment('Города вылета');
            $table->string('resorts_list')->nullable()->comment('Перечень курортов');
            $table->string('min_days')->nullable()->comment('Минимальное количество дней');
            $table->decimal('min_price', 12, 2)->comment('Минимальная цена');
            $table->text('search_script')->nullable()->comment('Скрипт для вывода поиска');
            $table->text('hot_tours_script')->nullable()->comment('Скрипт для вывода горячих туров');
            $table->text('description')->nullable()->comment('Текстовое описание раздела');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zagran_destinations');
    }
};
