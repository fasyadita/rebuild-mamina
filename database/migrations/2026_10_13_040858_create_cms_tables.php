<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // =============================================
        // CMS ADMIN TABLE (separate from customers)
        // =============================================
        Schema::create('cms_admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->nullable()->unique();
            $table->rememberToken();
            $table->timestamps();
        });

        // =============================================
        // CMS: MAIN LANDING - HERO / HOME SECTION
        // =============================================
        Schema::create('cms_main_hero', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_highlight')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('cta_text')->default('Reservasi');
            $table->string('cta_link')->default('/guest/login');
            $table->string('bg_image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: MAIN LANDING - TENTANG MAMINA
        // =============================================
        Schema::create('cms_about', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default('TENTANG MAMINA');
            $table->string('title');
            $table->string('title_highlight')->nullable();
            $table->text('description');
            $table->string('card1_title')->nullable();
            $table->text('card1_desc')->nullable();
            $table->string('card2_title')->nullable();
            $table->text('card2_desc')->nullable();
            $table->string('card3_title')->nullable();
            $table->text('card3_desc')->nullable();
            $table->string('service1_title')->nullable();
            $table->text('service1_desc')->nullable();
            $table->string('service2_title')->nullable();
            $table->text('service2_desc')->nullable();
            $table->string('service3_title')->nullable();
            $table->text('service3_desc')->nullable();
            $table->timestamps();
        });

        // =============================================
        // CMS: LAYANAN UNGGULAN CARDS
        // =============================================
        Schema::create('cms_layanan_unggulan', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('show_on_main')->default(true);
            $table->boolean('show_on_guest')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: TESTIMONY
        // =============================================
        Schema::create('cms_testimony', function (Blueprint $table) {
            $table->id();
            $table->string('reviewer_name');
            $table->text('review_text');
            $table->string('reviewer_photo')->nullable();
            $table->string('reviewer_desc')->nullable();
            $table->integer('rating')->default(5);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: FAQ
        // =============================================
        Schema::create('cms_faq', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->text('answer');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: CABANG
        // =============================================
        Schema::create('cms_cabang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_cabang');
            $table->text('alamat');
            $table->string('jam_operasional')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('image')->nullable();
            $table->string('gmaps_link')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: GUEST HERO SECTION
        // =============================================
        Schema::create('cms_guest_hero', function (Blueprint $table) {
            $table->id();
            $table->string('small_label')->default('TERPERCAYA DI INDONESIA');
            $table->string('title');
            $table->string('title_highlight')->nullable();
            $table->text('description');
            $table->string('cta_text')->default('Layanan Unggulan');
            $table->string('cta_link')->default('#top-service');
            $table->string('hero_image')->nullable();
            $table->string('comfort_label')->default('Pijat Bayi');
            $table->string('comfort_value')->default('98% Nyaman');
            $table->string('rating_label')->default('Rating');
            $table->string('rating_value')->default('4.9 / 5.0');
            $table->string('registered_count')->default('5k+');
            $table->timestamps();
        });

        // =============================================
        // CMS: ARTIKEL
        // =============================================
        Schema::create('cms_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->longText('content')->nullable();
            $table->string('category')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_photo')->nullable();
            $table->string('cover_image')->nullable();
            $table->date('published_at')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: MAMINA ESSENTIALS
        // =============================================
        Schema::create('cms_essentials', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default('MAMINA ESSENTIALS');
            $table->string('section_title');
            $table->text('section_desc')->nullable();
            $table->string('product_name');
            $table->text('product_desc')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_link')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: MAMINAGO
        // =============================================
        Schema::create('cms_maminago', function (Blueprint $table) {
            $table->id();
            $table->string('badge_text')->default('MAMINAGO!');
            $table->string('title');
            $table->text('description');
            $table->string('cta_text')->default('Daftar MaminaGO!');
            $table->string('cta_link')->nullable();
            $table->string('image')->nullable();
            $table->string('stat1_value')->nullable();
            $table->string('stat1_label')->nullable();
            $table->string('stat2_value')->nullable();
            $table->string('stat2_label')->nullable();
            $table->string('stat3_value')->nullable();
            $table->string('stat3_label')->nullable();
            $table->timestamps();
        });

        // =============================================
        // CMS: GENTLE LIVING / LACTASI CLASS
        // =============================================
        Schema::create('cms_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('gentle-living'); // gentle-living | lactasi
            $table->string('badge_text')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('cta_text')->nullable();
            $table->string('cta_link')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // =============================================
        // CMS: SITE SETTINGS
        // =============================================
        Schema::create('cms_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('label')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_settings');
        Schema::dropIfExists('cms_kelas');
        Schema::dropIfExists('cms_maminago');
        Schema::dropIfExists('cms_essentials');
        Schema::dropIfExists('cms_artikel');
        Schema::dropIfExists('cms_guest_hero');
        Schema::dropIfExists('cms_cabang');
        Schema::dropIfExists('cms_faq');
        Schema::dropIfExists('cms_testimony');
        Schema::dropIfExists('cms_layanan_unggulan');
        Schema::dropIfExists('cms_about');
        Schema::dropIfExists('cms_main_hero');
        Schema::dropIfExists('cms_admins');
    }
};
