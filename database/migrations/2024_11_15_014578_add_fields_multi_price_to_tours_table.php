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
        Schema::table('tours', function (Blueprint $table) {
            $table->json('multi_data')->nullable()->comment('Добавление нескольких дат');
            $table->string('header_bg', 700)->nullable()->comment('Видео или изображение на заставку');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('multi_data');
            $table->dropColumn('header_bg');
        });
    }
};
