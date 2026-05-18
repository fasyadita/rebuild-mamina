<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $customer = Auth::user();
        return view('member.profile.profile', compact('customer'));
    }

    public function edit()
    {
        $customer = Auth::user();
        return view('member.profile.edit-profile', compact('customer'));
    }

    public function update(Request $request)
    {
        $customer = Auth::user();

        $request->merge([
            'email' => trim($request->email),
            'no_hp' => trim($request->no_hp),
        ]);

        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'no_hp' => [
                'required',
                'string',
                'max:20',
                Rule::unique('customers', 'email')->ignore($customer->id),
            ],

            'email' => [
                'required',
                'email',
                'max:50',
                Rule::unique('customers', 'phone')->ignore($customer->id),
            ],
            'alamat' => ['nullable', 'string'],
            'provinsi' => ['nullable', 'string', 'max:255'],
            'agama' => ['nullable', 'string', 'max:255'],
            'kota' => ['nullable', 'string', 'max:255'],
            'kecamatan' => ['nullable', 'string', 'max:255'],
            'kelurahan' => ['nullable', 'string', 'max:255'],
            'jenis_kelamin' => ['nullable', 'in:Laki-laki,Perempuan'],
            'tgl_lahir' => ['nullable', 'date'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'pekerjaan' => ['nullable', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:2048']
        ]);

        $data = [
            'name' => $request->nama,
            'phone' => $request->no_hp,
            'email' => $request->email,
            'address' => $request->alamat,
            'province_id' => $request->provinsi,
            'religion' => $request->agama,
            'city_id' => $request->kota,
            'district_id' => $request->kecamatan,
            'village_id' => $request->kelurahan,
            'sex' => $request->jenis_kelamin == 'Laki-laki' ? 'L' : ($request->jenis_kelamin == 'Perempuan' ? 'P' : null),
            'birthdate' => $request->tgl_lahir,
            'ig' => $request->instagram,
            'occupation' => $request->pekerjaan,
        ];

        // Isi data model secara dinamis
        $customer->fill($data);

        // Cek perubahan gambar
        if ($request->hasFile('image')) {
            if ($customer->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($customer->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($customer->image);
            }
            $path = $request->file('image')->store('profiles', 'public');
            $customer->image = $path;
        }

        // isDirty() secara otomatis mengecek apakah ada field yang berubah nilainya dibanding data aslinya di DB
        if ($customer->isDirty()) {
            $customer->save();
            return redirect()->route('member.profile')->with('success', 'Profil berhasil diperbarui ✨');
        }

        return redirect()->route('member.profile')->with('info', 'Tidak ada perubahan data yang dilakukan.');
    }
}
