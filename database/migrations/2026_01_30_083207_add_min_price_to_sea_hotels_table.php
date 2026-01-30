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
            $table->float('min_price')->nullable()->comment('Минимальная цена');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sea_hotels', function (Blueprint $table) {
            $table->dropColumn('min_price');
        });
    }
};
