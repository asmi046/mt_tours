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
        Schema::create('sea_bus_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('direction')->comment('Направление');
            $table->string('start_date')->comment('Дата отправления');
            $table->string('end_date')->comment('Дата прибытия');
            $table->integer('sort_order')->default(0)->comment('Порядок вывода');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_bus_schedules');
    }
};
