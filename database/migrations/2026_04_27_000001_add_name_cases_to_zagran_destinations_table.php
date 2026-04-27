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
            $table->string('name_rp')->nullable()->comment('Название курорта Родительский падеж');
            $table->string('name_vp')->nullable()->comment('Название курорта Винительный падеж');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zagran_destinations', function (Blueprint $table) {
            $table->dropColumn(['name_rp', 'name_vp']);
        });
    }
};
