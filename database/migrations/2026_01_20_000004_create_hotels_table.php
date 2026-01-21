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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained()->onDelete('cascade')->comment('Связь с таблицей Направления');
            $table->foreignId('resort_id')->constrained()->onDelete('cascade')->comment('Связь с таблицей Курорт');
            $table->string('title')->comment('Заголовок');
            $table->string('slug')->comment('Slug');
            $table->integer('sort_order')->default(0)->comment('Порядок вывода');
            $table->text('description')->nullable()->comment('Описание');
            $table->text('short_description')->nullable()->comment('Краткое описание');
            $table->json('gallery')->nullable()->comment('Галерея');
            $table->json('parameters')->nullable()->comment('Параметры');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
