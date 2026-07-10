<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;
use App\Models\Kegiatan;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surat';

    protected $fillable = [
        'nomor_surat',
        'kegiatan_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'tanggal_surat',
        'file_path',
    ];

    protected $casts = [
        'tanggal_mulai'   => 'date',
        'tanggal_selesai' => 'date',
        'tanggal_surat'   => 'date',
    ];

    // ✅ FIX PENTING DI SINI
    public function pegawai()
    {
        return $this->belongsToMany(
            Pegawai::class,
            'surat_pegawai',
            'surat_id',
            'pegawai_id'
        )->withTimestamps(false);
    }

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
