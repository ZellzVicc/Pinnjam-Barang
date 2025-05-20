<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('landing.home');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Semua yang login akan diarahkan ke dashboard sesuai role
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $role = Auth::user()->role;

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else if ($role === 'operator') {
            return redirect()->route('operator.dashboard');
        } else {
            return redirect()->route('peminjam.dashboard');
        }
    });

    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin.index');
    })->name('admin.dashboard');

    Route::get('/operator/dashboard', function () {
        return view('dashboard.operator.index');
    })->name('operator.dashboard');

    Route::get('/peminjam/dashboard', function () {
        return view('dashboard.peminjam.index');
    })->name('peminjam.dashboard');
});
