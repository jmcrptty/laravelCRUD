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
        Schema::create('databarangs', function (Blueprint $table) {
            $table->id();
            $table->string('namabarang');
            $table->string('deskripsi');
            $table->string('kodebarang');
            $table->integer('jumlah');
            $table->string('tempatpenyimpanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('databarangs');
    }
};
