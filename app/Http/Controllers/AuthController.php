<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // Ganti dengan halaman yang sesuai
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    // Proses sign in (daftar)
    public function showSignUpForm()
    {
        return view('auth.signup');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'username' => 'required|unique:users,username|alpha_dash',
            'password' => 'required|min:6',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->withInput(['username' => $request->username, 'password' => $request->password])->with(['succesSignup' => true]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
