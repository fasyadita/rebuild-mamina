<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone' => ['required'],
            'password' => ['required'],
        ]);

        $user = \App\Models\Customer::where('phone', $credentials['phone'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->route('member.home');
        }

        return back()->withErrors([
            'phone' => 'No Telepon atau password salah.',
        ])->onlyInput('phone');
    }

    public function register(Request $request)
    {
        $request->validate([
            'branch_id' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20', \Illuminate\Validation\Rule::unique('customers', 'phone')],
            'email' => ['required', 'email', 'max:50', \Illuminate\Validation\Rule::unique('customers', 'email')],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'referrer' => ['nullable', 'string', 'max:255'],
            'terms' => ['accepted'],
        ], [
            'terms.accepted' => 'Anda harus menyetujui Kebijakan Privasi untuk mendaftar.',
        ]);

        $customer = \App\Models\Customer::create([
            'branch_id' => $request->branch_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referrer' => $request->referrer,
            'code' => strtoupper(\Illuminate\Support\Str::random(6)),
            'register_via' => 'Web',
            'is_active' => 1,
            'level' => 'Newborn',
            'points' => 0,
        ]);

        Auth::login($customer);
        $request->session()->regenerate();

        return redirect()->route('member.profile')->with('success', 'Registrasi berhasil! Selamat datang ✨');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
