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
        Schema::table('sea_way_prices', function (Blueprint $table) {
            $table->string('slug', 500)->comment('Слаг');
            $table->string('title', 500)->comment('Заголовок');
            $table->text('description')->nullable()->comment('Описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sea_way_prices', function (Blueprint $table) {
            $table->dropColumn(['slug', 'title', 'description']);
        });
    }
};
