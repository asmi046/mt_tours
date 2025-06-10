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
        Schema::create('sea_kurorts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('sea_direction_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->comment('Имя');
            $table->string('region')->nullable()->comment('Район');
            $table->string('slug')->unique()->comment('Слаг');
            $table->text('description')->nullable()->comment('Описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_kurorts');
    }
};
