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
        Schema::create('m_tumbuhkembang', function (Blueprint $table) {
            $table->integer('id_tumbuhkembang', true);
            $table->integer('id_anak');
            $table->date('tanggal_catatan')->nullable();
            $table->integer('umur')->nullable();
            $table->decimal('berat_badan', 5);
            $table->decimal('tinggi_badan', 5);
            $table->decimal('lingkar_kepala', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_tumbuhkembang');
    }
};
