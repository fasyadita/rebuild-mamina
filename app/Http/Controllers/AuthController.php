<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\OtpMail;

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

    public function showForgotForm()
    {
        return view('guest.login-regist.forgot');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:customers,email',
        ], [
            'email.exists' => 'Email tidak terdaftar di sistem kami.'
        ]);

        // Generate 6 digit OTP
        $otp = sprintf('%06d', mt_rand(0, 999999));
        
        // Save to session
        Session::put('reset_email', $request->email);
        Session::put('reset_otp', $otp);

        // Send Email
        Mail::to($request->email)->send(new OtpMail($otp));

        // Redirect to verifikasi page
        return redirect()->route('guest.verifikasi')->with('status', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function showVerifikasiForm()
    {
        return view('guest.login-regist.verifikasi');
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            'otp' => 'required|array|min:6|max:6',
            'otp.*' => 'required|numeric|digits:1',
        ]);

        $otpCode = implode('', $request->otp);
        $savedOtp = Session::get('reset_otp');

        if ($savedOtp && $otpCode === $savedOtp) {
            // Success, clear OTP and proceed
            // Session::forget('reset_otp'); // Actually, keep it so new password page knows it's verified. Or just set a verified flag.
            Session::put('otp_verified', true);
            return redirect()->route('guest.new-password')->with('status', 'Verifikasi berhasil. Silakan buat password baru Anda.');
        }

        return back()->with('error', 'Kode OTP yang Anda masukkan salah. Silakan coba lagi.');
    }

    public function showNewPasswordForm()
    {
        if (!Session::get('otp_verified') || !Session::get('reset_email')) {
            return redirect()->route('guest.forgot')->withErrors(['email' => 'Sesi Anda telah berakhir. Silakan ulangi proses lupa password.']);
        }
        return view('guest.login-regist.new-password');
    }

    public function updatePassword(Request $request)
    {
        if (!Session::get('otp_verified') || !Session::get('reset_email')) {
            return redirect()->route('guest.forgot')->withErrors(['email' => 'Sesi Anda telah berakhir. Silakan ulangi proses lupa password.']);
        }

        $request->validate([
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ], [
            'password.confirmed' => 'Konfirmasi password tidak cocok.'
        ]);

        $email = Session::get('reset_email');
        $user = \App\Models\Customer::where('email', $email)->first();

        if ($user) {
            // Based on your existing code, you are using md5 for passwords
            $user->update([
                'password' => md5($request->password)
            ]);
        }

        // Clear sessions
        Session::forget(['reset_email', 'reset_otp', 'otp_verified']);

        return redirect()->route('guest.login')->with('status', 'Password berhasil diubah. Silakan masuk menggunakan password baru Anda.');
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
