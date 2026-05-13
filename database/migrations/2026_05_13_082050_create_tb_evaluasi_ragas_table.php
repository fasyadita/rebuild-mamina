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
        Schema::create('tb_evaluasi_ragas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('session_id', 100)->nullable();
            $table->text('question')->nullable();
            $table->longText('context')->nullable();
            $table->longText('answer')->nullable();
            $table->timestamp('waktu')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_evaluasi_ragas');
    }
};
