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
        Schema::table('zagran_resorts', function (Blueprint $table) {
            $table->string('resort_name')->after('title')->comment('Название курорта для SEO/витрины');
            $table->string('sub_title')->nullable()->after('resort_name')->comment('Подзаголовок');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('zagran_resorts', function (Blueprint $table) {
            $table->dropColumn(['resort_name', 'sub_title']);
        });
    }
};
