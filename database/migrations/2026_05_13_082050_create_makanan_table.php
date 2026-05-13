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
        Schema::create('makanan', function (Blueprint $table) {
            $table->bigIncrements('id_makanan');
            $table->unsignedBigInteger('id_kategori')->index('m_makanan_id_kategori_foreign');
            $table->string('nama_makanan');
            $table->decimal('kalori');
            $table->decimal('protein');
            $table->decimal('karbohidrat');
            $table->decimal('lemak');
            $table->decimal('serat')->nullable();
            $table->decimal('vitamin_a')->nullable();
            $table->decimal('vitamin_c')->nullable();
            $table->decimal('kalsium')->nullable();
            $table->decimal('zat_besi')->nullable();
            $table->string('satuan');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makanan');
    }
};
