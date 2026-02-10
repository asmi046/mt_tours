<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->string('alean_areas_id')->nullable()->comment('id прилежащих местностей');
        });
    }

    public function down(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->dropColumn('alean_areas_id');
        });
    }
};
