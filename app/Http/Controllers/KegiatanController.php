<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $kegiatan = Kegiatan::when($search, function ($query, $search) {
                return $query->where('nama_kegiatan', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10)        // 🔥 Tampilkan 20 data per halaman
            ->withQueryString();  // 🔥 Agar pencarian tidak hilang saat pagination

        return view('kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:150',
            'template_path' => 'nullable|file|mimes:pdf,docx|max:10204',
        ]);

        $path = null;
        if ($request->hasFile('template_path')) {
            $path = $request->file('template_path')->store('templates', 'public');
        }

        Kegiatan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'template_path' => $path,
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function edit(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        return view('kegiatan.edit', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        $request->validate([
            'nama_kegiatan' => 'required|string|max:150',
            'template_path' => 'nullable|file|mimes:pdf,docx|max:10204',
        ]);

        $data = ['nama_kegiatan' => $request->nama_kegiatan];

        if ($request->hasFile('template_path')) {
            if ($kegiatan->template_path && Storage::disk('public')->exists($kegiatan->template_path)) {
                Storage::disk('public')->delete($kegiatan->template_path);
            }

            $data['template_path'] = $request->file('template_path')->store('templates', 'public');
        }

        $kegiatan->update($data);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);

        if ($kegiatan->template_path && Storage::disk('public')->exists($kegiatan->template_path)) {
            Storage::disk('public')->delete($kegiatan->template_path);
        }

        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
