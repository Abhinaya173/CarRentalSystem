<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('merk');
            $table->string('model');
            $table->string('transmisi');
            $table->integer('tahun');
            $table->integer('kursi');
            $table->decimal('biaya_sewa', 10, 2);
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('cars');
        Schema::dropIfExists('car');
    }
};
