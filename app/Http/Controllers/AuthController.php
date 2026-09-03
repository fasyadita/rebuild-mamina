<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.login-regist.login');
    }

    public function showRegistrationForm()
    {
        return view('guest.login-regist.regist');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = \App\Models\Customer::where('email', $credentials['email'])->first();

        if ($user && md5($credentials['password']) === $user->password) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->route('member.home');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
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

        $user = \App\Models\Customer::create([
            'branch_id' => $request->branch_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => md5($request->password),
            'referrer' => $request->referrer,
            'code' => strtoupper(\Illuminate\Support\Str::random(6)),
            'register_via' => 'Web',
            'is_active' => 1,
            'level' => 'Newborn',
            'points' => 0,
        ]);

        Auth::login($user);
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

    public function redirectToGoogle()
    {
        return \Laravel\Socialite\Facades\Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = \Laravel\Socialite\Facades\Socialite::driver('google')->user();

            $user = \App\Models\Customer::where('google_id', $googleUser->getId())
                                        ->orWhere('email', $googleUser->getEmail())
                                        ->first();

            if ($user) {
                // Update google_id if it's missing (e.g. matched by email)
                if (!$user->google_id) {
                    $user->update(['google_id' => $googleUser->getId()]);
                }
                
                Auth::login($user);
                return redirect()->route('member.home');
            }

            // Create new user if not exists
            $newUser = \App\Models\Customer::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => md5(\Illuminate\Support\Str::random(16)), // Fallback random password
                'code' => strtoupper(\Illuminate\Support\Str::random(6)),
                'register_via' => 'Google',
                'is_active' => 1,
                'level' => 'Newborn',
                'points' => 0,
            ]);

            Auth::login($newUser);
            return redirect()->route('member.profile')->with('success', 'Registrasi dengan Google berhasil! Selamat datang ✨');
            
        } catch (\Exception $e) {
            return redirect()->route('guest.login')->withErrors(['email' => 'Gagal masuk dengan Google. Silakan coba lagi.']);
        }
    }
}
