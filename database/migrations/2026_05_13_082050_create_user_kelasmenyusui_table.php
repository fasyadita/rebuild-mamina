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
        Schema::create('user_kelasmenyusui', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama');
            $table->string('telepon');
            $table->string('email');
            $table->dateTime('tanggal')->nullable()->useCurrent();
            $table->string('password')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->dateTime('last_login');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_kelasmenyusui');
    }
};
