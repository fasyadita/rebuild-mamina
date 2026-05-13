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
        Schema::create('fund_moves', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('branch_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('origin_id')->nullable();
            $table->integer('destination_id')->nullable();
            $table->string('id_number')->nullable();
            $table->dateTime('date')->nullable();
            $table->double('amount')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('thumb')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_moves');
    }
};
