@extends('layouts.app')

@section('title', 'Tambah Surat')

@section('content')
<div class="container" style="padding:20px; max-width:700px; margin:auto; font-family:Arial, sans-serif;">

    <h2 style="font-weight:700; font-size:2rem; margin-bottom:20px; color:#333;">
        Tambah Surat
    </h2>

    {{-- Error --}}
    @if ($errors->any())
        <div style="background:#f8d7da; color:#721c24; padding:12px 15px; border-radius:6px; margin-bottom:20px;">
            <ul style="margin:0; padding-left:18px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('surat.store') }}" method="POST"
          style="background:white; padding:25px; border-radius:10px;
                 box-shadow:0 2px 10px rgba(0,0,0,0.1); border:1px solid #ddd;">
        @csrf

        {{-- Nomor Surat --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; margin-bottom:5px; display:block;">
                Nomor Surat <span style="color:red">*</span>
            </label>
            <input type="text"
                   name="nomor_surat"
                   value="{{ old('nomor_surat') }}"
                   required
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Kegiatan --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; margin-bottom:5px; display:block;">
                Pilih Kegiatan <span style="color:red">*</span>
            </label>
            <select id="kegiatan_id" name="kegiatan_id" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                <option value="">-- Pilih Kegiatan --</option>
                @foreach($kegiatan as $item)
                    <option value="{{ $item->id }}"
                        data-template="{{ $item->template_path ? asset('storage/'.$item->template_path) : '' }}"
                        {{ old('kegiatan_id') == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_kegiatan }}
                    </option>
                @endforeach
            </select>

            <div id="template-preview" style="margin-top:8px; font-size:0.9rem;"></div>
        </div>

        {{-- Pegawai Multi --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; margin-bottom:5px; display:block;">
                Pegawai (boleh lebih dari satu)
            </label>
            <select name="pegawai_ids[]" multiple
                    style="width:100%; padding:10px; border:1px solid #ccc;
                           border-radius:6px; height:160px;">
                @foreach($pegawai as $p)
                    <option value="{{ $p->id }}"
                        {{ in_array($p->id, old('pegawai_ids', [])) ? 'selected' : '' }}>
                        {{ $p->nama }} ({{ $p->nip }})
                    </option>
                @endforeach
            </select>

            <small style="color:#64748b;">
                * Tahan CTRL (Windows) / CMD (Mac) untuk memilih banyak pegawai
            </small>
        </div>

        {{-- Tanggal Mulai --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; margin-bottom:5px; display:block;">
                Tanggal Mulai <span style="color:red">*</span>
            </label>
            <input type="date" name="tanggal_mulai"
                   value="{{ old('tanggal_mulai') }}"
                   required
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Tanggal Selesai --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; margin-bottom:5px; display:block;">
                Tanggal Selesai <span style="color:red">*</span>
            </label>
            <input type="date" name="tanggal_selesai"
                   value="{{ old('tanggal_selesai') }}"
                   required
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Tanggal Surat --}}
        <div style="margin-bottom:20px;">
            <label style="font-weight:600; margin-bottom:5px; display:block;">
                Tanggal Surat <span style="color:red">*</span>
            </label>
            <input type="date" name="tanggal_surat"
                   value="{{ old('tanggal_surat') }}"
                   required
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Tombol --}}
        <div style="display:flex; justify-content:flex-end; gap:10px;">
            <a href="{{ route('surat.index') }}"
               style="padding:10px 16px; background:#6c757d; color:white;
                      border-radius:6px; text-decoration:none;">
                Batal
            </a>
            <button type="submit"
                    style="padding:10px 16px; background:#2563eb; color:white;
                           border:none; border-radius:6px; font-weight:600;">
                Simpan Surat
            </button>
        </div>
    </form>
</div>

<script>
    const kegiatanSelect = document.getElementById('kegiatan_id');
    const previewDiv = document.getElementById('template-preview');

    function updatePreview() {
        const opt = kegiatanSelect.options[kegiatanSelect.selectedIndex];
        const template = opt.getAttribute('data-template');

        previewDiv.innerHTML = template
            ? `<a href="${template}" target="_blank" style="color:#2563eb; font-weight:600;">Lihat Template Surat</a>`
            : '';
    }

    kegiatanSelect.addEventListener('change', updatePreview);
    window.addEventListener('load', updatePreview);
</script>

@endsection
