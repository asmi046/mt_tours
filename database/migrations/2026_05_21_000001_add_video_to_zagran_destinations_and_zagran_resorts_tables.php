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
        Schema::table('zagran_destinations', function (Blueprint $table) {
            $table->string('video')->nullable()->comment('Ссылка на видео');
        });

        Schema::table('zagran_resorts', function (Blueprint $table) {
            $table->string('video')->nullable()->comment('Ссылка на видео');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zagran_destinations', function (Blueprint $table) {
            $table->dropColumn('video');
        });

        Schema::table('zagran_resorts', function (Blueprint $table) {
            $table->dropColumn('video');
        });
    }
};
