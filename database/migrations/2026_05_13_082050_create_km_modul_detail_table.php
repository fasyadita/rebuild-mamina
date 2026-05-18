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
        Schema::create('km_modul_detail', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_modul')->nullable();
            $table->string('nama', 50)->nullable();
            $table->string('link', 100)->nullable();
            $table->string('dokumen', 100)->nullable();
            $table->enum('tipe', ['ppt', 'video'])->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->text('desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('km_modul_detail');
    }
};
