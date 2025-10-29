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
        Schema::create('data__tingkat__inflasi__kota__pontianaks', function (Blueprint $table) {
            $table->id();
            $table->integer('Tahun')->unique();
            $table->decimal('Jumlah', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__tingkat__inflasi__kota__pontianaks');
    }
};
