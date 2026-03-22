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
        Schema::create('zagran_resorts', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->foreignId('zagran_destination_id')
                ->constrained('zagran_destinations')
                ->cascadeOnDelete()
                ->comment('Связь с заграничным направлением');
            $table->string('title')->comment('Название курорта');
            $table->string('img', 600)->nullable()->comment('Изображение');
            $table->integer('order')->default(0)->comment('Порядок вывода');
            $table->string('slug')->unique()->comment('Слаг для ссылки');
            $table->text('hot_tours_script')->nullable()->comment('Скрипт для вывода горячих туров');
            $table->text('description')->nullable()->comment('Текстовое описание раздела');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zagran_resorts');
    }
};
