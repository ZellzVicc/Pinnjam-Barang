@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card p-4 w-50 shadow">
        <div class="text-center">
            <img src="{{ asset('images/logo-no-text.png') }}" alt="Logo" width="80">
            <h4 class="mt-2">Login ke Aplikasi</h4>
        </div>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary w-100">Login</button>
        </form>
        <div class="mt-3 text-center">
            <a href="/register">Belum punya akun? Daftar di sini</a>
        </div>
    </div>
</div>
@endsection
