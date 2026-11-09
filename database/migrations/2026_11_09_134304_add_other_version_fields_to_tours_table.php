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
        Schema::table('tours', function (Blueprint $table) {
            $table->string('other_version_lnk')->nullable()->comment('Ссылка на другую версию тура');
            $table->string('other_version_banner', 800)->nullable()->comment('Баннер другой версии тура');
            $table->text('other_version_text')->nullable()->comment('Текст для другой версии тура');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn(['other_version_lnk', 'other_version_banner', 'other_version_text']);
        });
    }
};
