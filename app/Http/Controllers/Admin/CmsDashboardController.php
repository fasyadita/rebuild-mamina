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
            'semua_layanan' => \App\Models\Product::count(),
            'terapis'    => \App\Models\User::where('roles', 'like', '%terapis%')->orWhere('roles', 'like', '%konselor%')->count(),
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
            'badge_text',
            'title',
            'title_highlight',
            'description',
            'card1_title',
            'card1_desc',
            'card2_title',
            'card2_desc',
            'card3_title',
            'card3_desc',
            'service1_title',
            'service1_desc',
            'service2_title',
            'service2_desc',
            'service3_title',
            'service3_desc',
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
            'small_label',
            'title',
            'title_highlight',
            'description',
            'cta_text',
            'cta_link',
            'comfort_label',
            'comfort_value',
            'rating_label',
            'rating_value',
            'registered_count',
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

    // ==============================
    // CMS: SEMUA LAYANAN (PRODUCTS)
    // ==============================
   public function katalogLayananIndex(Request $request)
    {
        $search = $request->input('search');
        $categoryId = $request->input('category_id');

        // 1. Tentukan kategori yang diizinkan di atas
        $allowed = ['Anak', 'Bayi', 'Ibu', 'Imunisasi', 'Kelas', 'Konsultasi', 'Lainnya', 'Paket', 'Toddler', 'Umum'];

        // 2. Tambahkan whereHas agar produk yang ditarik HANYA yang kategorinya ada di dalam $allowed
        $query = \App\Models\Product::with('category')
            ->whereHas('category', function ($q) use ($allowed) {
                $q->whereIn('name', $allowed);
            })
            ->orderBy('name', 'asc');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        $layananList = $query->paginate(15)->withQueryString();
        
        // Dropdown kategori tetap difilter
        $categories = \App\Models\ProductCategory::whereIn('name', $allowed)->orderBy('name')->get();

        return view('admin.cms.katalog-layanan', compact('layananList', 'categories', 'search', 'categoryId'));
    }

    public function katalogLayananCreate()
    {
        $allowed = ['Anak', 'Bayi', 'Ibu', 'Imunisasi', 'Kelas', 'Konsultasi', 'Lainnya', 'Paket', 'Toddler', 'Umum'];
        $categories = \App\Models\ProductCategory::whereIn('name', $allowed)->orderBy('name')->get();
        return view('admin.cms.katalog-layanan-form', [
            'item' => null,
            'categories' => $categories
        ]);
    }

    public function katalogLayananStore(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|integer',
            'sale_price'  => 'required|numeric|min:0',
            'duration'    => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $product = new \App\Models\Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sale_price = $request->sale_price;
        $product->duration = $request->duration ?? 0;
        $product->description = $request->description;
        $product->is_active = $request->has('is_active') ? '1' : '0';
        $product->is_show = $request->has('is_active') ? true : false;
        $product->vendor_id = 1;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/katalog-layanan', 'public');
            $product->image = $path;
        } elseif ($request->filled('image_url')) {
            $product->image = $request->image_url;
        }

        $product->save();

        return redirect()->route('admin.cms.katalog-layanan')->with('success', 'Layanan berhasil ditambahkan ke katalog!');
    }

    public function katalogLayananEdit($id)
    {
        $item = \App\Models\Product::findOrFail($id);
        $allowed = ['Anak', 'Bayi', 'Ibu', 'Imunisasi', 'Kelas', 'Konsultasi', 'Lainnya', 'Paket', 'Toddler', 'Umum'];
        $categories = \App\Models\ProductCategory::whereIn('name', $allowed)->orderBy('name')->get();
        return view('admin.cms.katalog-layanan-form', compact('item', 'categories'));
    }

    public function katalogLayananUpdate(Request $request, $id)
    {
        $product = \App\Models\Product::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|integer',
            'sale_price'  => 'required|numeric|min:0',
            'duration'    => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sale_price = $request->sale_price;
        $product->duration = $request->duration ?? 0;
        $product->description = $request->description;
        $product->is_active = $request->has('is_active') ? '1' : '0';
        $product->is_show = $request->has('is_active') ? true : false;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/katalog-layanan', 'public');
            $product->image = $path;
        } elseif ($request->filled('image_url')) {
            $product->image = $request->image_url;
        }

        $product->save();

        return redirect()->route('admin.cms.katalog-layanan')->with('success', 'Layanan berhasil diperbarui!');
    }

    public function katalogLayananDestroy($id)
    {
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.cms.katalog-layanan')->with('success', 'Layanan berhasil dihapus!');
    }

    // ==============================
    // CMS: TERAPIS & TIM MAMINA
    // ==============================
    public function terapisIndex(Request $request)
    {
        $search = $request->input('search');
        $branchId = $request->input('branch_id');
        $roleFilter = $request->input('role');

        $query = \App\Models\User::where(function ($q) {
            $q->where('roles', 'like', '%terapis%')
                ->orWhere('roles', 'like', '%konselor%');
        })->orderBy('name', 'asc');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('ig', 'like', "%{$search}%");
            });
        }

        if ($branchId) {
            $query->where('branch_id', $branchId);
        }

        if ($roleFilter) {
            $query->where('roles', 'like', "%{$roleFilter}%");
        }

        $terapisList = $query->paginate(15)->withQueryString();
        $branches = DB::table('branches')->select('id', 'name')->get();

        return view('admin.cms.terapis', compact('terapisList', 'branches', 'search', 'branchId', 'roleFilter'));
    }

    public function terapisCreate()
    {
        $branches = DB::table('branches')->select('id', 'name')->get();
        return view('admin.cms.terapis-form', [
            'item' => null,
            'branches' => $branches
        ]);
    }

    public function terapisStore(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'username'  => 'required|string|max:100|unique:users,username',
            'branch_id' => 'required|integer',
            'roles'     => 'required|string|max:100',
            'phone'     => 'nullable|string|max:50',
            'email'     => 'nullable|string|max:100',
            'ig'        => 'nullable|string|max:100',
            'address'   => 'nullable|string',
            'birthdate' => 'nullable|date',
            'area'      => 'nullable|string|max:255',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->branch_id = $request->branch_id;
        $user->roles = $request->roles;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->ig = $request->ig ? ltrim($request->ig, '@') : null;
        $user->address = $request->address;
        $user->birthdate = $request->birthdate;
        $user->area = $request->area;
        $user->is_active = $request->has('is_active') ? 1 : 0;
        $user->is_tim = 1;
        $user->password = bcrypt('mamina123'); // Default password

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('cms/terapis', 'public');
            $user->thumb = $path;
            $user->cover = $path;
        } elseif ($request->filled('photo_url')) {
            $user->thumb = $request->photo_url;
            $user->cover = $request->photo_url;
        }

        $user->save();

        return redirect()->route('admin.cms.terapis')->with('success', 'Terapis berhasil ditambahkan!');
    }

    public function terapisEdit($id)
    {
        $item = \App\Models\User::findOrFail($id);
        $branches = DB::table('branches')->select('id', 'name')->get();
        return view('admin.cms.terapis-form', compact('item', 'branches'));
    }

    public function terapisUpdate(Request $request, $id)
    {
        $user = \App\Models\User::findOrFail($id);

        $request->validate([
            'name'      => 'required|string|max:255',
            'username'  => 'required|string|max:100|unique:users,username,' . $id,
            'branch_id' => 'required|integer',
            'roles'     => 'required|string|max:100',
            'phone'     => 'nullable|string|max:50',
            'email'     => 'nullable|string|max:100',
            'ig'        => 'nullable|string|max:100',
            'address'   => 'nullable|string',
            'birthdate' => 'nullable|date',
            'area'      => 'nullable|string|max:255',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:3072',
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->branch_id = $request->branch_id;
        $user->roles = $request->roles;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->ig = $request->ig ? ltrim($request->ig, '@') : null;
        $user->address = $request->address;
        $user->birthdate = $request->birthdate;
        $user->area = $request->area;
        $user->is_active = $request->has('is_active') ? 1 : 0;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('cms/terapis', 'public');
            $user->thumb = $path;
            $user->cover = $path;
        } elseif ($request->filled('photo_url')) {
            $user->thumb = $request->photo_url;
            $user->cover = $request->photo_url;
        }

        $user->save();

        return redirect()->route('admin.cms.terapis')->with('success', 'Data informasi dan foto terapis berhasil diperbarui!');
    }

    public function terapisDestroy($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.cms.terapis')->with('success', 'Data terapis berhasil dihapus!');
    }
}
