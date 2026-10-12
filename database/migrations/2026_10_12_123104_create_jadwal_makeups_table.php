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
    Schema::create('jadwal_makeups', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelanggan', 100);
        $table->date('tanggal');
        $table->time('waktu');
        $table->string('status', 30)->default('Menunggu');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_makeups');
    }
};
