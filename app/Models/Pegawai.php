<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Surat;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = ['nama', 'nip'];

    // ✅ FIX JUGA DI SINI
    public function surat()
    {
        return $this->belongsToMany(
            Surat::class,
            'surat_pegawai',
            'pegawai_id',
            'surat_id'
        )->withTimestamps(false);
    }
}
