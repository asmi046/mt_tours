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
        Schema::create('sea_resorts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sea_destination_id')->constrained()->onDelete('cascade')->comment('Связь с таблицей Направления');
            $table->string('title')->comment('Заголовок');
            $table->string('subtitle')->nullable()->comment('Подзаголовок');
            $table->string('slug')->comment('Slug');
            $table->integer('sort_order')->default(0)->comment('Порядок вывода');
            $table->text('description')->nullable()->comment('Описание');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_resorts');
    }
};
