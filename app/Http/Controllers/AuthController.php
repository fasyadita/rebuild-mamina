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

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
