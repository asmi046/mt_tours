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
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->string('page_title')->nullable()->comment('Заголовок страницы');
            $table->string('page_subtitle')->nullable()->comment('Подзаголовок страницы');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->dropColumn(['page_title', 'page_subtitle']);
        });
    }
};
