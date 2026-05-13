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
        Schema::create('growth', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('kid_id')->nullable();
            $table->date('date')->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('head')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growth');
    }
};
