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
        Schema::create('t_kelas_pijat_bayi', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama');
            $table->string('telepon');
            $table->string('email');
            $table->dateTime('tanggal')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_kelas_pijat_bayi');
    }
};
