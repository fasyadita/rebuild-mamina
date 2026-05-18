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
        Schema::create('sale_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sale_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('qty')->nullable()->default(0);
            $table->double('cost_price')->nullable()->default(0);
            $table->double('sale_price')->nullable()->default(0);
            $table->float('discount_percentage')->nullable()->default(0);
            $table->double('discount_amount')->nullable()->default(0);
            $table->double('total1')->nullable()->default(0);
            $table->double('diskon')->nullable()->default(0);
            $table->double('total2')->nullable()->default(0);
            $table->double('total3')->nullable()->default(0);
            $table->mediumText('testimoni')->nullable();
            $table->dateTime('testimoni_date')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_items');
    }
};
