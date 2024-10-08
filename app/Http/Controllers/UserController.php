<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class UserController extends Controller
{
    //
    public function signup()
    {
        return view('auth.signup');
    }

    public function login(Request $request)
    {
        return "<pre>$request->nama \n $request->username \n $request->password</pre>";
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:20|alpha_dash:ascii|unique:users,username',
            'password' => 'required',
        ]);

        // Enkripsi password
        $validated['password'] = Hash::make($validated['password']);

        // Buat user baru
        $newUser = UserModel::create($validated);

        // Login user setelah registrasi
        Auth::login($newUser, true);

        // Regenerasi sesi untuk keamanan
        $request->session()->regenerate();

        // Redirect ke halaman yang diinginkan
        return redirect()->intended()->route('beli_tiket', 1);
    }
    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Regenerasi sesi untuk keamanan
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau halaman lain
        return redirect()->route('login');
    }
}
