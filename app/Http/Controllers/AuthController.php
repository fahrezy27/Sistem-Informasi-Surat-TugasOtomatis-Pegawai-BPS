<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

        public function login(Request $request)
    {
        // Hapus session lama
        session()->forget(['user_id', 'user_name']);

        // Validasi
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cari user berdasarkan kolom "nama"
        $user = User::where('nama', $request->username)->first();

        if (!$user) {
            return back()->with('error', 'Username atau password salah!');
        }

        $inputPassword = $request->password;
        $dbPassword = $user->password;

        // Cek password hash atau MD5
        $isBcrypt = substr($dbPassword, 0, 4) === '$2y$';
        $valid = false;

        if ($isBcrypt && Hash::check($inputPassword, $dbPassword)) {
            $valid = true;
        } elseif (!$isBcrypt && $dbPassword === md5($inputPassword)) {
            // Upgrade ke bcrypt biar lebih aman
            $user->password = bcrypt($inputPassword);
            $user->save();
            $valid = true;
        }

        if (! $valid) {
            return back()->with('error', 'Username atau password salah!');
        }

        // 🔥 Remember Me
        $remember = $request->has('remember'); 
        // bernilai true jika user mencentang "Ingat saya"

        // 🔥 Login Laravel + Remember
        auth()->login($user, $remember);

        // Jika remember=true -> Laravel otomatis bikin "remember_token" di DB
        // dan buat cookie login 5 tahun

        // Simpan session custom milik kamu
        session([
            'user_id'   => $user->id,
            'user_name' => $user->nama,
        ]);

        return redirect()->route('dashboard');
    }


    public function logout(Request $request)
{
    auth()->logout();

    // Hapus remember me cookie
    $cookieName = Auth::getRecallerName(); // "remember_web_xxxxx"
    Cookie::queue(Cookie::forget($cookieName));

    // Hapus session custom
    $request->session()->forget(['user_id', 'user_name']);
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
}


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|unique:users,nama',
            'password' => 'required|string|min:5',
        ]);

        // Simpan user baru
        $user = new User();
        $user->nama = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    public function edit()
    {
        return view('auth.edit', [
            'user' => auth()->user()
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'nama' => 'required|string|max:255',
            'password' => 'nullable|string|min:5',
        ]);

        $user->nama = $request->nama;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        session(['user_name' => $user->nama]);

        return back()->with('success', 'Akun berhasil diperbarui!');
    }
}
