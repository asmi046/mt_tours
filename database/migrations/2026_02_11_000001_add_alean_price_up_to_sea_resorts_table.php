<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->decimal('alean_price_up', 10, 2)
                ->default(3000)
                ->comment('Наценка/порог для цены из Alean');
        });
    }

    public function down(): void
    {
        Schema::table('sea_resorts', function (Blueprint $table) {
            $table->dropColumn('alean_price_up');
        });
    }
};
