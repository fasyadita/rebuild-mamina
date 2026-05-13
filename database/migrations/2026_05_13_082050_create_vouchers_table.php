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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code')->nullable();
            $table->integer('percentage')->nullable();
            $table->double('amount')->nullable();
            $table->integer('quota')->nullable();
            $table->integer('min_sale')->nullable();
            $table->double('max_discount')->nullable();
            $table->date('expired_at')->nullable();
            $table->integer('is_active')->nullable()->default(1);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
