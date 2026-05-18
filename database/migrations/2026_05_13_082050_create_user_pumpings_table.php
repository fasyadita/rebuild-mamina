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
        Schema::create('user_pumpings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('customer_id')->nullable();
            $table->dateTime('start_time')->nullable();
            $table->integer('duration')->nullable()->comment('In minutes');
            $table->double('left_breast')->nullable()->default(0);
            $table->double('right_breast')->nullable()->default(0);
            $table->text('note')->nullable();
            $table->boolean('is_period')->nullable()->default(false);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_pumpings');
    }
};
