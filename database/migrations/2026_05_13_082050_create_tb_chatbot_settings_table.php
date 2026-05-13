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
        Schema::create('tb_chatbot_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('setting_key', 100)->unique('setting_key');
            $table->text('setting_value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_chatbot_settings');
    }
};
