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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('vendor_id');
            $table->integer('category_id')->nullable();
            $table->string('product_kind')->nullable();
            $table->string('product_type')->nullable();
            $table->string('service_type', 50)->nullable();
            $table->string('name')->nullable();
            $table->string('kategori', 10)->nullable();
            $table->string('description')->nullable();
            $table->integer('duration')->nullable()->default(0)->comment('untuk durasi layanan');
            $table->string('image')->nullable();
            $table->string('thumb')->nullable();
            $table->double('sale_price')->nullable()->default(0);
            $table->double('file_size')->nullable()->default(0);
            $table->double('cost_price')->nullable()->default(0);
            $table->double('discount_percentage')->nullable()->default(0);
            $table->double('discount_amount')->nullable()->default(0);
            $table->integer('stok')->nullable()->default(0);
            $table->boolean('is_voucher')->nullable()->default(false)->comment('Jika voucher yang dimasukkan, dicek setiap produk berlaku atau tidak');
            $table->boolean('is_show')->nullable()->default(true);
            $table->enum('is_active', ['0', '1'])->nullable()->default('1');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
