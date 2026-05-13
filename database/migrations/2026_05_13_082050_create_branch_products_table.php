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
        Schema::create('branch_products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->double('cost_price')->nullable()->default(0);
            $table->double('sale_price')->nullable()->default(0);
            $table->float('discount_percentage')->nullable()->default(0);
            $table->double('discount_amount')->nullable()->default(0);
            $table->boolean('is_voucher')->nullable()->default(false);
            $table->boolean('is_show')->nullable()->default(true);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_products');
    }
};
