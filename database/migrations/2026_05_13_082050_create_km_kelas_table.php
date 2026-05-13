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
        Schema::create('km_kelas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('judul', 50)->nullable();
            $table->string('sub_judul', 50)->nullable();
            $table->string('cover', 50)->nullable();
            $table->integer('jml_modul')->nullable();
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->text('desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('km_kelas');
    }
};
