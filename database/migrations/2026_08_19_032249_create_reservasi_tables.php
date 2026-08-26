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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->unique();
            $table->integer('branch_id')->nullable();
            $table->string('sale_type')->nullable();
            $table->string('nama_cust')->nullable();
            $table->string('nama_anak')->nullable();
            $table->string('no_tlp')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('sesi')->nullable();
            $table->string('status')->default('Pending');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();
        });

        Schema::create('reservasi_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('service_name')->nullable();
            $table->unsignedBigInteger('therapist_id')->nullable();
            $table->integer('qty')->default(1);
            $table->text('note')->nullable();
            $table->timestamps();

            $table->foreign('reservation_id')->references('id')->on('reservasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi_details');
        Schema::dropIfExists('reservasi');
    }
};
