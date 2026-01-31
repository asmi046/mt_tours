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
            $table->string('bus_direction')->nullable()->comment('Направление автобуса');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sea_hotels', function (Blueprint $table) {
            $table->dropColumn('bus_direction');
        });
    }
};
