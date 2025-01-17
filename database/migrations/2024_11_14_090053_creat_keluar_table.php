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
        Schema::create('masuk', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('barang', 50);
            $table->date('tanggal');
            $table->text('jumlah',);
            $table->text('keluar');
            $table->text('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
