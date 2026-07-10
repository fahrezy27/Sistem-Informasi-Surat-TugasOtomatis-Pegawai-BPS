<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nama',
        'password',
    ];

    // Karena tabel users kamu tidak punya created_at dan updated_at
    public $timestamps = false;

    // 🔥 Gunakan kolom "nama" sebagai username untuk auth Laravel
    public function getAuthIdentifierName()
    {
        return 'nama';
    }
}
