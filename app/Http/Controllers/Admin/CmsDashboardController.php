<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'hero'       => DB::table('cms_main_hero')->count(),
            'layanan'    => DB::table('cms_layanan_unggulan')->where('is_active', 1)->count(),
            'testimony'  => DB::table('cms_testimony')->where('is_active', 1)->count(),
            'faq'        => DB::table('cms_faq')->where('is_active', 1)->count(),
            'cabang'     => DB::table('cms_cabang')->where('is_active', 1)->count(),
            'artikel'    => DB::table('cms_artikel')->where('is_active', 1)->count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }

    // ==============================
    // MAIN HERO
    // ==============================
    public function heroIndex()
    {
        $hero = DB::table('cms_main_hero')->first();
        return view('admin.cms.hero', compact('hero'));
    }

    public function heroUpdate(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'cta_text'    => 'required|string|max:100',
            'cta_link'    => 'required|string|max:255',
        ]);

        $data = $request->only(['title', 'title_highlight', 'subtitle', 'description', 'cta_text', 'cta_link']);
        $data['is_active'] = 1;
        $data['updated_at'] = now();

        if ($request->hasFile('bg_image')) {
            $path = $request->file('bg_image')->store('cms/hero', 'public');
            $data['bg_image'] = '/storage/' . $path;
        } elseif ($request->filled('bg_image_url')) {
            $data['bg_image'] = $request->bg_image_url;
        }

        if (DB::table('cms_main_hero')->exists()) {
            DB::table('cms_main_hero')->update($data);
        } else {
            $data['created_at'] = now();
            DB::table('cms_main_hero')->insert($data);
        }

        return back()->with('success', 'Hero section berhasil diperbarui!');
    }

    // ==============================
    // ABOUT / TENTANG MAMINA
    // ==============================
    public function aboutIndex()
    {
        $about = DB::table('cms_about')->first();
        return view('admin.cms.about', compact('about'));
    }

    public function aboutUpdate(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->only([
            'badge_text','title','title_highlight','description',
            'card1_title','card1_desc','card2_title','card2_desc','card3_title','card3_desc',
            'service1_title','service1_desc','service2_title','service2_desc','service3_title','service3_desc',
        ]);
        $data['updated_at'] = now();

        if (DB::table('cms_about')->exists()) {
            DB::table('cms_about')->update($data);
        } else {
            $data['created_at'] = now();
            DB::table('cms_about')->insert($data);
        }

        return back()->with('success', 'Section Tentang Mamina berhasil diperbarui!');
    }

    // ==============================
    // LAYANAN UNGGULAN
    // ==============================
    public function layananIndex()
    {
        $layanan = DB::table('cms_layanan_unggulan')->orderBy('sort_order')->get();
        return view('admin.cms.layanan', compact('layanan'));
    }

    public function layananCreate()
    {
        return view('admin.cms.layanan-form', ['item' => null]);
    }

    public function layananStore(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->only(['title', 'description', 'price', 'sort_order']);
        $data['show_on_main']  = $request->has('show_on_main') ? 1 : 0;
        $data['show_on_guest'] = $request->has('show_on_guest') ? 1 : 0;
        $data['is_active']     = $request->has('is_active') ? 1 : 0;
        $data['created_at']    = now();
        $data['updated_at']    = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/layanan', 'public');
            $data['image'] = '/storage/' . $path;
        } else {
            $data['image'] = $request->input('image_url', null);
        }

        DB::table('cms_layanan_unggulan')->insert($data);
        return redirect()->route('admin.cms.layanan')->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function layananEdit($id)
    {
        $item = DB::table('cms_layanan_unggulan')->where('id', $id)->first();
        return view('admin.cms.layanan-form', compact('item'));
    }

    public function layananUpdate(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->only(['title', 'description', 'price', 'sort_order']);
        $data['show_on_main']  = $request->has('show_on_main') ? 1 : 0;
        $data['show_on_guest'] = $request->has('show_on_guest') ? 1 : 0;
        $data['is_active']     = $request->has('is_active') ? 1 : 0;
        $data['updated_at']    = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/layanan', 'public');
            $data['image'] = '/storage/' . $path;
        } elseif ($request->filled('image_url')) {
            $data['image'] = $request->image_url;
        }

        DB::table('cms_layanan_unggulan')->where('id', $id)->update($data);
        return redirect()->route('admin.cms.layanan')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function layananDestroy($id)
    {
        DB::table('cms_layanan_unggulan')->where('id', $id)->delete();
        return redirect()->route('admin.cms.layanan')->with('success', 'Layanan berhasil dihapus!');
    }

    // ==============================
    // TESTIMONY
    // ==============================
    public function testimonyIndex()
    {
        $testimonies = DB::table('cms_testimony')->orderBy('sort_order')->get();
        return view('admin.cms.testimony', compact('testimonies'));
    }

    public function testimonyCreate()
    {
        return view('admin.cms.testimony-form', ['item' => null]);
    }

    public function testimonyStore(Request $request)
    {
        $request->validate([
            'reviewer_name' => 'required|string|max:255',
            'review_text'   => 'required|string',
        ]);

        $data = $request->only(['reviewer_name', 'review_text', 'reviewer_desc', 'rating', 'sort_order']);
        $data['is_active']  = $request->has('is_active') ? 1 : 0;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        if ($request->hasFile('reviewer_photo')) {
            $path = $request->file('reviewer_photo')->store('cms/testimony', 'public');
            $data['reviewer_photo'] = '/storage/' . $path;
        } else {
            $data['reviewer_photo'] = $request->input('photo_url', null);
        }

        DB::table('cms_testimony')->insert($data);
        return redirect()->route('admin.cms.testimony')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function testimonyEdit($id)
    {
        $item = DB::table('cms_testimony')->where('id', $id)->first();
        return view('admin.cms.testimony-form', compact('item'));
    }

    public function testimonyUpdate(Request $request, $id)
    {
        $request->validate([
            'reviewer_name' => 'required|string|max:255',
            'review_text'   => 'required|string',
        ]);

        $data = $request->only(['reviewer_name', 'review_text', 'reviewer_desc', 'rating', 'sort_order']);
        $data['is_active']  = $request->has('is_active') ? 1 : 0;
        $data['updated_at'] = now();

        if ($request->hasFile('reviewer_photo')) {
            $path = $request->file('reviewer_photo')->store('cms/testimony', 'public');
            $data['reviewer_photo'] = '/storage/' . $path;
        } elseif ($request->filled('photo_url')) {
            $data['reviewer_photo'] = $request->photo_url;
        }

        DB::table('cms_testimony')->where('id', $id)->update($data);
        return redirect()->route('admin.cms.testimony')->with('success', 'Testimoni berhasil diperbarui!');
    }

    public function testimonyDestroy($id)
    {
        DB::table('cms_testimony')->where('id', $id)->delete();
        return redirect()->route('admin.cms.testimony')->with('success', 'Testimoni berhasil dihapus!');
    }

    // ==============================
    // FAQ
    // ==============================
    public function faqIndex()
    {
        $faqs = DB::table('cms_faq')->orderBy('sort_order')->get();
        return view('admin.cms.faq', compact('faqs'));
    }

    public function faqCreate()
    {
        return view('admin.cms.faq-form', ['item' => null]);
    }

    public function faqStore(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer'   => 'required|string',
        ]);

        DB::table('cms_faq')->insert([
            'question'   => $request->question,
            'answer'     => $request->answer,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->has('is_active') ? 1 : 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.cms.faq')->with('success', 'FAQ berhasil ditambahkan!');
    }

    public function faqEdit($id)
    {
        $item = DB::table('cms_faq')->where('id', $id)->first();
        return view('admin.cms.faq-form', compact('item'));
    }

    public function faqUpdate(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:500',
            'answer'   => 'required|string',
        ]);

        DB::table('cms_faq')->where('id', $id)->update([
            'question'   => $request->question,
            'answer'     => $request->answer,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->has('is_active') ? 1 : 0,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.cms.faq')->with('success', 'FAQ berhasil diperbarui!');
    }

    public function faqDestroy($id)
    {
        DB::table('cms_faq')->where('id', $id)->delete();
        return redirect()->route('admin.cms.faq')->with('success', 'FAQ berhasil dihapus!');
    }

    // ==============================
    // CABANG
    // ==============================
    public function cabangIndex()
    {
        $cabangs = DB::table('cms_cabang')->orderBy('sort_order')->get();
        return view('admin.cms.cabang', compact('cabangs'));
    }

    public function cabangCreate()
    {
        return view('admin.cms.cabang-form', ['item' => null]);
    }

    public function cabangStore(Request $request)
    {
        $request->validate([
            'nama_cabang' => 'required|string|max:255',
            'alamat'      => 'required|string',
        ]);

        $data = $request->only(['nama_cabang', 'alamat', 'jam_operasional', 'no_telepon', 'gmaps_link', 'sort_order']);
        $data['is_active']  = $request->has('is_active') ? 1 : 0;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/cabang', 'public');
            $data['image'] = '/storage/' . $path;
        } else {
            $data['image'] = $request->input('image_url', null);
        }

        DB::table('cms_cabang')->insert($data);
        return redirect()->route('admin.cms.cabang')->with('success', 'Cabang berhasil ditambahkan!');
    }

    public function cabangEdit($id)
    {
        $item = DB::table('cms_cabang')->where('id', $id)->first();
        return view('admin.cms.cabang-form', compact('item'));
    }

    public function cabangUpdate(Request $request, $id)
    {
        $request->validate([
            'nama_cabang' => 'required|string|max:255',
            'alamat'      => 'required|string',
        ]);

        $data = $request->only(['nama_cabang', 'alamat', 'jam_operasional', 'no_telepon', 'gmaps_link', 'sort_order']);
        $data['is_active']  = $request->has('is_active') ? 1 : 0;
        $data['updated_at'] = now();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/cabang', 'public');
            $data['image'] = '/storage/' . $path;
        } elseif ($request->filled('image_url')) {
            $data['image'] = $request->image_url;
        }

        DB::table('cms_cabang')->where('id', $id)->update($data);
        return redirect()->route('admin.cms.cabang')->with('success', 'Cabang berhasil diperbarui!');
    }

    public function cabangDestroy($id)
    {
        DB::table('cms_cabang')->where('id', $id)->delete();
        return redirect()->route('admin.cms.cabang')->with('success', 'Cabang berhasil dihapus!');
    }

    // ==============================
    // ARTIKEL
    // ==============================
    public function artikelIndex()
    {
        $artikels = DB::table('cms_artikel')->orderByDesc('created_at')->get();
        return view('admin.cms.artikel', compact('artikels'));
    }

    public function artikelCreate()
    {
        return view('admin.cms.artikel-form', ['item' => null]);
    }

    public function artikelStore(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:500',
            'excerpt' => 'required|string',
        ]);

        $data = $request->only(['title', 'excerpt', 'content', 'category', 'author_name', 'published_at']);
        $data['is_featured'] = $request->has('is_featured') ? 1 : 0;
        $data['is_active']   = $request->has('is_active') ? 1 : 0;
        $data['created_at']  = now();
        $data['updated_at']  = now();

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('cms/artikel', 'public');
            $data['cover_image'] = '/storage/' . $path;
        } else {
            $data['cover_image'] = $request->input('cover_url', null);
        }

        if ($request->hasFile('author_photo')) {
            $path = $request->file('author_photo')->store('cms/artikel', 'public');
            $data['author_photo'] = '/storage/' . $path;
        } else {
            $data['author_photo'] = $request->input('author_photo_url', null);
        }

        DB::table('cms_artikel')->insert($data);
        return redirect()->route('admin.cms.artikel')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function artikelEdit($id)
    {
        $item = DB::table('cms_artikel')->where('id', $id)->first();
        return view('admin.cms.artikel-form', compact('item'));
    }

    public function artikelUpdate(Request $request, $id)
    {
        $request->validate([
            'title'   => 'required|string|max:500',
            'excerpt' => 'required|string',
        ]);

        $data = $request->only(['title', 'excerpt', 'content', 'category', 'author_name', 'published_at']);
        $data['is_featured'] = $request->has('is_featured') ? 1 : 0;
        $data['is_active']   = $request->has('is_active') ? 1 : 0;
        $data['updated_at']  = now();

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('cms/artikel', 'public');
            $data['cover_image'] = '/storage/' . $path;
        } elseif ($request->filled('cover_url')) {
            $data['cover_image'] = $request->cover_url;
        }

        if ($request->hasFile('author_photo')) {
            $path = $request->file('author_photo')->store('cms/artikel', 'public');
            $data['author_photo'] = '/storage/' . $path;
        } elseif ($request->filled('author_photo_url')) {
            $data['author_photo'] = $request->author_photo_url;
        }

        DB::table('cms_artikel')->where('id', $id)->update($data);
        return redirect()->route('admin.cms.artikel')->with('success', 'Artikel berhasil diperbarui!');
    }

    public function artikelDestroy($id)
    {
        DB::table('cms_artikel')->where('id', $id)->delete();
        return redirect()->route('admin.cms.artikel')->with('success', 'Artikel berhasil dihapus!');
    }

    // ==============================
    // GUEST HERO
    // ==============================
    public function guestHeroIndex()
    {
        $hero = DB::table('cms_guest_hero')->first();
        return view('admin.cms.guest-hero', compact('hero'));
    }

    public function guestHeroUpdate(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->only([
            'small_label','title','title_highlight','description',
            'cta_text','cta_link',
            'comfort_label','comfort_value','rating_label','rating_value','registered_count',
        ]);
        $data['updated_at'] = now();

        if ($request->hasFile('hero_image')) {
            $path = $request->file('hero_image')->store('cms/hero', 'public');
            $data['hero_image'] = '/storage/' . $path;
        } elseif ($request->filled('hero_image_url')) {
            $data['hero_image'] = $request->hero_image_url;
        }

        if (DB::table('cms_guest_hero')->exists()) {
            DB::table('cms_guest_hero')->update($data);
        } else {
            $data['created_at'] = now();
            DB::table('cms_guest_hero')->insert($data);
        }

        return back()->with('success', 'Guest hero section berhasil diperbarui!');
    }

    // ==============================
    // SETTINGS
    // ==============================
    public function settingsIndex()
    {
        $settings = DB::table('cms_settings')->get()->keyBy('key');
        return view('admin.cms.settings', compact('settings'));
    }

    public function settingsUpdate(Request $request)
    {
        $fields = $request->except(['_token', '_method']);

        foreach ($fields as $key => $value) {
            DB::table('cms_settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value, 'updated_at' => now(), 'created_at' => now()]
            );
        }

        return back()->with('success', 'Pengaturan berhasil disimpan!');
    }
}
