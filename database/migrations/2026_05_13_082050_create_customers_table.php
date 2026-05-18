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
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('branch_id')->nullable();
            $table->string('id_number')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('ig')->nullable();
            $table->string('password')->nullable();
            $table->text('fcm_token')->nullable();
            $table->string('mobile_token')->nullable();
            $table->string('referral')->nullable();
            $table->string('referrer')->nullable();
            $table->string('code');
            $table->string('name')->nullable();
            $table->string('nickname')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('sex', ['L', 'P'])->nullable();
            $table->string('occupation')->nullable();
            $table->string('religion')->nullable();
            $table->string('address', 100)->nullable();
            $table->string('village_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('province_id')->nullable();
            $table->integer('kids_count')->nullable()->default(0);
            $table->float('points')->nullable()->default(0);
            $table->string('level')->nullable()->default('Newborn');
            $table->string('image')->nullable();
            $table->string('thumb')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->tinyInteger('is_new')->nullable()->default(1);
            $table->integer('total_homecare')->nullable()->default(0);
            $table->integer('total_outlet')->nullable()->default(0);
            $table->dateTime('last_order')->nullable();
            $table->dateTime('last_login_web')->nullable();
            $table->dateTime('last_login_mobile')->nullable();
            $table->dateTime('last_sent_wa')->nullable();
            $table->dateTime('last_sent_email')->nullable();
            $table->string('register_via')->nullable()->default('Kasir');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
