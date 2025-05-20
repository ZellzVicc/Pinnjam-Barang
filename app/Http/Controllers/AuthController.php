<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $role = Auth::user()->role;

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role === 'operator') {
            return redirect()->route('operator.dashboard');
        } else {
            return redirect()->route('peminjam.dashboard');
        }
    }

    return back()->withErrors([
        'email' => 'Login gagal. Periksa kembali email dan password.',
    ])->onlyInput('email');
}


    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:50|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'nama' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'peminjam',
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect()->route('peminjam.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
