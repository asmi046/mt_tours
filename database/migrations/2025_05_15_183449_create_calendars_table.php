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
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Заголовок');
            $table->string('post_lnk')->comment('Ссылка на пост');
            $table->string('post_thumbinal', 700)->comment('Изображение');
            $table->string('dey_count')->nullable()->comment('Колисество дней');
            $table->string('price')->comment('Цена');
            $table->string('region')->nullable()->comment('Регион');
            $table->json('dates')->nullable()->comment('Даты тура');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
