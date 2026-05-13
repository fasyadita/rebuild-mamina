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
        Schema::create('km_modul', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_kelas')->nullable();
            $table->string('nama', 50)->nullable();
            $table->boolean('status')->nullable()->default(true);
            $table->integer('jml')->nullable();
            $table->string('kode', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('km_modul');
    }
};
