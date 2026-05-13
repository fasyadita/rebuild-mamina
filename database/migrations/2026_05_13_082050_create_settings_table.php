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
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('branch_id')->nullable();
            $table->double('ambang_batas')->nullable();
            $table->float('poin_jual')->nullable()->default(1);
            $table->boolean('is_referral')->nullable()->default(true);
            $table->integer('for_sharer')->nullable();
            $table->integer('for_newcomer')->nullable();
            $table->float('poin_sharer')->nullable();
            $table->float('poin_newcomer')->nullable();
            $table->tinyInteger('is_discount')->nullable()->default(1);
            $table->integer('discount')->nullable();
            $table->integer('min_discount')->nullable();
            $table->integer('exp_discount')->nullable()->comment('satuan hari');
            $table->tinyInteger('is_estafet')->nullable()->default(0);
            $table->float('estafet_points')->nullable();
            $table->double('estafet_discount')->nullable();
            $table->float('estafet_percent')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
