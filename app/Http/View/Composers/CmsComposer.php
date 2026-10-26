<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CmsComposer
{
    /**
     * Cache CMS data in-memory during a single HTTP request lifecycle.
     */
    protected static ?array $cachedData = null;

    public function compose(View $view): void
    {
        if (static::$cachedData === null) {
            static::$cachedData = $this->loadCmsData();
        }

        $view->with(static::$cachedData);
    }

    protected function loadCmsData(): array
    {
        $data = [
            'cmsHero'         => null,
            'cmsAbout'        => null,
            'cmsLayanan'      => collect(),
            'cmsGuestLayanan' => collect(),
            'cmsGuestHero'    => null,
            'cmsArtikels'     => collect(),
            'cmsTestimonies'  => collect(),
            'cmsCabangs'      => collect(),
            'cmsFaqs'         => collect(),
            'cmsEssentials'   => collect(),
            'cmsMaminago'     => null,
            'cmsKelasGentle'  => collect(),
            'cmsKelasLactasi' => collect(),
            'cmsSettings'     => collect(),
        ];

        try {
            if (Schema::hasTable('cms_main_hero')) {
                $data['cmsHero'] = DB::table('cms_main_hero')->where('is_active', 1)->first()
                    ?? DB::table('cms_main_hero')->first();
            }

            if (Schema::hasTable('cms_about')) {
                $data['cmsAbout'] = DB::table('cms_about')->first();
            }

            if (Schema::hasTable('cms_layanan_unggulan')) {
                $data['cmsLayanan'] = DB::table('cms_layanan_unggulan')
                    ->where('is_active', 1)
                    ->where('show_on_main', 1)
                    ->orderBy('sort_order', 'asc')
                    ->orderBy('id', 'asc')
                    ->get();

                $data['cmsGuestLayanan'] = DB::table('cms_layanan_unggulan')
                    ->where('is_active', 1)
                    ->where('show_on_guest', 1)
                    ->orderBy('sort_order', 'asc')
                    ->orderBy('id', 'asc')
                    ->get();
            }

            if (Schema::hasTable('cms_guest_hero')) {
                $data['cmsGuestHero'] = DB::table('cms_guest_hero')->first();
            }

            if (Schema::hasTable('cms_artikel')) {
                $data['cmsArtikels'] = DB::table('cms_artikel')
                    ->where('is_active', 1)
                    ->orderByDesc('is_featured')
                    ->orderByDesc('created_at')
                    ->get();
            }

            if (Schema::hasTable('cms_testimony')) {
                $data['cmsTestimonies'] = DB::table('cms_testimony')
                    ->where('is_active', 1)
                    ->orderBy('sort_order', 'asc')
                    ->orderBy('id', 'asc')
                    ->get();
            }

            if (Schema::hasTable('cms_cabang')) {
                $data['cmsCabangs'] = DB::table('cms_cabang')
                    ->where('is_active', 1)
                    ->orderBy('sort_order', 'asc')
                    ->orderBy('id', 'asc')
                    ->get();
            }

            if (Schema::hasTable('cms_faq')) {
                $data['cmsFaqs'] = DB::table('cms_faq')
                    ->where('is_active', 1)
                    ->orderBy('sort_order', 'asc')
                    ->orderBy('id', 'asc')
                    ->get();
            }

            if (Schema::hasTable('cms_essentials')) {
                $data['cmsEssentials'] = DB::table('cms_essentials')
                    ->where('is_active', 1)
                    ->orderBy('sort_order', 'asc')
                    ->get();
            }

            if (Schema::hasTable('cms_maminago')) {
                $data['cmsMaminago'] = DB::table('cms_maminago')->first();
            }

            if (Schema::hasTable('cms_kelas')) {
                $data['cmsKelasGentle'] = DB::table('cms_kelas')
                    ->where('type', 'gentle-living')
                    ->where('is_active', 1)
                    ->orderBy('sort_order', 'asc')
                    ->get();

                $data['cmsKelasLactasi'] = DB::table('cms_kelas')
                    ->where('type', 'lactasi')
                    ->where('is_active', 1)
                    ->orderBy('sort_order', 'asc')
                    ->get();
            }

            if (Schema::hasTable('cms_settings')) {
                $data['cmsSettings'] = DB::table('cms_settings')->get()->keyBy('key');
            }
        } catch (\Throwable $e) {
            // Fail safely if database table is not migrated or database offline
        }

        return $data;
    }
}
