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
        Schema::create('sea_way_prices', function (Blueprint $table) {
            $table->id();
            $table->string('city')->comment('Город');
            $table->integer('order')->default(0)->comment('Порядок сортировки');
            $table->string('bus_schedule')->comment('Расписание автобусов');
            $table->float('two_way')->comment('Цена за 2 стороны');
            $table->float('one_way')->nullable()->comment('Цена за 1 сторону');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_way_prices');
    }
};
