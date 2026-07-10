<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Surat;
use App\Models\Kegiatan;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah data
        $totalPegawai = Pegawai::count();
        $totalSurat = Surat::count();
        $totalKegiatan = Kegiatan::count();

        // Kirim ke view
        return view('dashboard.index', compact('totalPegawai', 'totalSurat', 'totalKegiatan'));
    }
}
