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
        Schema::create('sales', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('branch_id')->nullable();
            $table->integer('fund_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('voucher_id')->nullable();
            $table->integer('customer_id')->nullable()->default(0);
            $table->string('id_number');
            $table->string('sale_type')->nullable();
            $table->dateTime('date')->nullable()->useCurrent();
            $table->float('points')->nullable()->comment('konversi poin');
            $table->double('ambang_batas')->nullable()->default(0);
            $table->text('catatan')->nullable()->comment('nama pelanggan dan bayi');
            $table->tinyInteger('dapat_diskon')->nullable()->default(0);
            $table->text('revisi')->nullable();
            $table->enum('status', ['draft', 'paid'])->nullable();
            $table->double('subtotal')->nullable()->default(0);
            $table->double('diskon')->nullable()->default(0);
            $table->float('discount_percentage')->nullable()->default(0);
            $table->double('diskon_adisional')->nullable()->default(0);
            $table->double('total')->nullable()->default(0);
            $table->double('bayar')->nullable()->default(0);
            $table->double('kembalian')->nullable()->default(0);
            $table->string('via')->nullable()->default('mobile');
            $table->string('state')->nullable()->default('reserved');
            $table->tinyInteger('status_hc')->nullable()->default(1);
            $table->string('estafet', 50)->nullable();
            $table->string('wa', 50)->nullable();
            $table->dateTime('testimoni_date')->nullable();
            $table->double('transport')->nullable()->default(0);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
