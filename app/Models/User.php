<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    // Nama tabel sesuai database kamu (User)
    protected $table = 'users';

    // Primary key yang sesuai
    protected $primaryKey = 'user_id';

    // Jika tabel tidak punya created_at & updated_at
    public $timestamps = false;

    // Kolom yang boleh diisi mass assign
    protected $fillable = [
        'nama',
        'username', // bisa kamu isi NULL kalau tidak pakai username di register
        'email',
        'password',
        'role',
    ];

    // Kolom yang disembunyikan saat output
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
