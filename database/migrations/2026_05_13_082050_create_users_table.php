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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('branch_id')->nullable();
            $table->string('username');
            $table->string('password')->nullable();
            $table->text('fcm_token')->nullable();
            $table->string('mobile_token')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('ig')->nullable();
            $table->enum('sex', ['L', 'P'])->nullable();
            $table->date('joined_at')->nullable();
            $table->string('roles')->nullable();
            $table->string('display')->nullable();
            $table->text('area')->nullable();
            $table->double('online')->nullable();
            $table->double('offline')->nullable();
            $table->string('cover')->nullable();
            $table->string('thumb')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_pusat')->nullable()->default(true);
            $table->tinyInteger('is_tim')->nullable()->default(0);
            $table->dateTime('last_login_web')->nullable();
            $table->dateTime('last_login_mobile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
