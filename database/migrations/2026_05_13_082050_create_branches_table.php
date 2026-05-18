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
        Schema::create('branches', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->string('alias')->nullable();
            $table->string('ig')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->text('reminder')->nullable();
            $table->string('qty_goods_color', 50)->nullable();
            $table->string('qty_service_color', 50)->nullable();
            $table->string('omzet_goods_color', 50)->nullable();
            $table->string('omzet_service_color', 50)->nullable();
            $table->string('cost_color', 50)->nullable();
            $table->float('lat')->nullable();
            $table->float('long')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
