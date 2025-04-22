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
        Schema::create('tour_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('show')->default(true)->comment('Выводить категорию');
            $table->integer("parentid")->default(0)->comment("ID родительской категории");
            $table->integer("order")->default(0)->comment("Порядок сортировки");
            $table->string("name")->comment("Имя категории");
            $table->string("html_name")->nullable()->comment("Выводимое имя категории");
            $table->string("slug", 200)->comment("Slug категории");
            $table->string("template_name")->nullable()->comment("Имя шаблона");
            $table->text('subtitle')->nullable()->comment('Подзаголовок баннера');
            $table->text('description')->nullable()->comment('Описание');
        });

        Schema::create('tour_tour_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('tour_category_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_tour_category');
        Schema::dropIfExists('tour_categories');
    }
};
