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
        //
        Schema::create('cabang', function (Blueprint $table) {
            $table->id();  
            $table->text('nama_cabang');  
            $table->text('alamat');  
            $table->text('pegawai');
            $table->date('tanggal');
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cabang');
    }
};
