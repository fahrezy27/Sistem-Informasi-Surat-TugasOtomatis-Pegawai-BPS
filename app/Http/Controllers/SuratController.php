<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Surat;
use App\Models\Kegiatan;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SuratController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('id');
    }

    // ================================
    public function index()
    {
        $surat = Surat::with(['pegawai', 'kegiatan'])
            ->orderBy('tanggal_mulai', 'desc')
            ->paginate(10); // 👈 PAGINATION 10 DATA

        return view('surat.index', compact('surat'));
    }

    // ================================
    public function create()
    {
        return view('surat.create', [
            'pegawai'  => Pegawai::all(),
            'kegiatan' => Kegiatan::all(),
        ]);
    }

    // ================================
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat'     => 'required|unique:surat,nomor_surat',
            'pegawai_ids'     => 'nullable|array',
            'pegawai_ids.*'   => 'exists:pegawai,id',
            'kegiatan_id'     => 'required|exists:kegiatan,id',
            'tanggal_mulai'   => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'tanggal_surat'   => 'required|date',
        ]);

        $kegiatan = Kegiatan::findOrFail($request->kegiatan_id);

        $surat = Surat::create([
            'nomor_surat'     => $request->nomor_surat,
            'kegiatan_id'     => $request->kegiatan_id,
            'tanggal_mulai'   => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'tanggal_surat'   => $request->tanggal_surat,
            'file_path'       => $kegiatan->template_path,
        ]);

        if ($request->filled('pegawai_ids')) {
            $surat->pegawai()->attach($request->pegawai_ids);
        }

        return redirect()
            ->route('surat.index')
            ->with('success', 'Surat berhasil ditambahkan');
    }

    // ================================
    public function edit(Surat $surat)
    {
        return view('surat.edit', [
            'surat'    => $surat->load('pegawai'),
            'pegawai'  => Pegawai::all(),
            'kegiatan' => Kegiatan::all(),
        ]);
    }

    // ================================
    public function update(Request $request, Surat $surat)
    {
        $request->validate([
            'nomor_surat'     => 'required|unique:surat,nomor_surat,' . $surat->id,
            'pegawai_ids'     => 'nullable|array',
            'pegawai_ids.*'   => 'exists:pegawai,id',
            'kegiatan_id'     => 'required|exists:kegiatan,id',
            'tanggal_mulai'   => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'tanggal_surat'   => 'required|date',
        ]);

        $surat->update([
            'nomor_surat'     => $request->nomor_surat,
            'kegiatan_id'     => $request->kegiatan_id,
            'tanggal_mulai'   => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'tanggal_surat'   => $request->tanggal_surat,
        ]);

        $surat->pegawai()->sync($request->pegawai_ids ?? []);

        return redirect()
            ->route('surat.index')
            ->with('success', 'Surat berhasil diperbarui');
    }

    // ================================
    public function destroy(Surat $surat)
    {
        $surat->pegawai()->detach();
        $surat->delete();

        return back()->with('success', 'Surat berhasil dihapus');
    }

    // ============================================================
    // GENERATE WORD → 1 PEGAWAI = 1 HALAMAN
    // ============================================================
    public function generateWord($id)
    {
        $surat = Surat::with(['pegawai', 'kegiatan'])->findOrFail($id);

        if (!$surat->file_path) {
            abort(404, 'Template surat belum tersedia');
        }

        if ($surat->pegawai->isEmpty()) {
            abort(400, 'Pegawai belum dipilih');
        }

        $templatePath = storage_path('app/public/' . $surat->file_path);

        $outputDir = storage_path('app/public/surat/');
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0777, true);
        }

        $outputFile = $outputDir . 'Surat-' . Str::slug($surat->nomor_surat) . '.docx';

        $template = new TemplateProcessor($templatePath);

        $template->cloneBlock(
            'BLOCK_PEGAWAI',
            $surat->pegawai->count(),
            true,
            true
        );

        foreach ($surat->pegawai as $i => $pegawai) {
            $n = $i + 1;

            $template->setValue("nomor_surat#$n", $surat->nomor_surat);
            $template->setValue("nama_pegawai#$n", $pegawai->nama);
            $template->setValue("nip#$n", $pegawai->nip);
            $template->setValue("kegiatan#$n", $surat->kegiatan->nama_kegiatan);

            $template->setValue(
                "tanggal_mulai#$n",
                Carbon::parse($surat->tanggal_mulai)->translatedFormat('d F Y')
            );

            $template->setValue(
                "tanggal_selesai#$n",
                Carbon::parse($surat->tanggal_selesai)->translatedFormat('d F Y')
            );

            $template->setValue(
                "tanggal_surat#$n",
                Carbon::parse($surat->tanggal_surat)->translatedFormat('d F Y')
            );
        }

        $template->saveAs($outputFile);

        return response()->download($outputFile);
    }
}
