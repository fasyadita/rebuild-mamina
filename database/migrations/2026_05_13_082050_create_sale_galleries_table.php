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
        Schema::create('sale_galleries', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('customer_id')->nullable();
            $table->integer('sale_id')->nullable();
            $table->integer('sale_item_id')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('photo', 50)->nullable();
            $table->string('thumb', 50)->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_galleries');
    }
};
