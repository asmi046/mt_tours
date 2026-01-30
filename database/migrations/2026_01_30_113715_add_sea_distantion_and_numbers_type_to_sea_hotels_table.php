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
        Schema::table('sea_hotels', function (Blueprint $table) {
            $table->string('sea_distantion')->nullable()->comment('Расстояние до моря');
            $table->text('numbers_type')->nullable()->comment('Типы номеров');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sea_hotels', function (Blueprint $table) {
            $table->dropColumn(['sea_distantion', 'numbers_type']);
        });
    }
};
