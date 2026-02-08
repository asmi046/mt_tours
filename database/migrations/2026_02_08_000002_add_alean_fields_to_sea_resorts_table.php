<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->unsignedInteger('alean_id')->nullable()->comment('Alean ID');
            $table->string('alean_cid')->nullable()->comment('Alean CID');
        });
    }

    public function down(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->dropColumn(['alean_id', 'alean_cid']);
        });
    }
};
