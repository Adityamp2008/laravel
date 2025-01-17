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
            $table->string('masuk', 50);
            $table->date('keluar');
            $table->text('jumlah',);
            $table->text('keuntungan');
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
