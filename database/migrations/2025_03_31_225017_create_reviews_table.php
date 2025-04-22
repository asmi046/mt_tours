<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->comment('Имя оставившего отзыв');
            $table->date('data')->comment('Дата публикации');
            $table->string('platform')->comment('Платформа');
            $table->string('img', 500)->nullable()->comment('Изображение');
            $table->integer('score')->comment('Оценка');
            $table->text('description')->nullable()->comment('Платформа');
            $table->string('platform_lnk')->nullable()->comment('Платформа');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
