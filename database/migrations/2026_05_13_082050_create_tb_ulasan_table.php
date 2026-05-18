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
        Schema::create('tb_ulasan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('tanggal')->nullable()->useCurrent();
            $table->integer('rating');
            $table->text('komentar')->nullable();
            $table->string('session_id', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ulasan');
    }
};
