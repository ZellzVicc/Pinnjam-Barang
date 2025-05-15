@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card p-4 w-50 shadow">
        <div class="text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80">
            <h4 class="mt-2">Daftar Akun Baru</h4>
        </div>
        <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Daftar</button>
        </form>
        <div class="mt-3 text-center">
            <a href="/login">Sudah punya akun? Login di sini</a>
        </div>
    </div>
</div>
@endsection
