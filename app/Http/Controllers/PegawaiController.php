<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Halaman daftar pegawai (index) dengan search + pagination
     */
    public function index(Request $request)
    {
        $query = Pegawai::query();

        // Jika ada query search, filter berdasarkan nama atau NIP
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('nip', 'like', "%{$search}%");
            });
        }

        // PENTING: gunakan paginate, bukan get()
        $pegawai = $query->orderBy('nama', 'asc')->paginate(10);

        // Agar pagination mempertahankan search
        $pegawai->appends($request->only('search'));

        return view('pegawai.index', compact('pegawai'));
    }

    // Halaman form tambah pegawai
    public function create()
    {
        return view('pegawai.create');
    }

    // Simpan data pegawai baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip'  => 'required|string|unique:pegawai,nip',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan!');
    }

    // Halaman form edit pegawai
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    // Update data pegawai
    public function update(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nip'  => 'required|string|unique:pegawai,nip,' . $pegawai->id,
        ]);

        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diupdate!');
    }

    // Hapus data pegawai
    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
