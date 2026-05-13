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
        Schema::create('tb_pengetahuan', function (Blueprint $table) {
            $table->integer('Id_file', true);
            $table->string('nama_file')->nullable();
            $table->string('index_name')->nullable();
            $table->string('berkas')->nullable();
            $table->integer('jumlah_dokumen')->nullable()->default(0);
            $table->dateTime('last_update')->nullable();
            $table->string('status', 20)->nullable()->default('Belum');
            $table->dateTime('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengetahuan');
    }
};
