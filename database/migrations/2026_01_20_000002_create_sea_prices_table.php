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
        Schema::create('sea_prices', function (Blueprint $table) {
            $table->id();
            $table->string('viezd')->comment('Выезд');
            $table->string('vozvrashenie')->comment('Возвращение');
            $table->integer('june_day_count')->comment('Количество дней июнь');
            $table->integer('july_day_count')->comment('Количество дней июль');
            $table->integer('august_day_count')->comment('Количество дней август');
            $table->integer('september_day_count')->comment('Количество дней сентябрь');
            $table->string('direction')->comment('Направление');
            $table->integer('sort_order')->default(0)->comment('Порядок вывода');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_prices');
    }
};
