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
        Schema::create('tb_chat_history', function (Blueprint $table) {
            $table->integer('id_chat', true);
            $table->dateTime('waktu')->useCurrent();
            $table->text('user_msg');
            $table->text('bot_reply');
            $table->string('session_id', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chat_history');
    }
};
