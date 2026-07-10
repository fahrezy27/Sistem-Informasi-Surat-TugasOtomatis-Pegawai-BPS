@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="container" style="padding:20px; max-width:700px; margin:auto; font-family:Arial, sans-serif;">

    <h2 style="font-weight:700; font-size:2rem; margin-bottom:20px; color:#333;">
        Edit Kegiatan
    </h2>

    {{-- Pesan error validasi --}}
    @if ($errors->any())
        <div style="background-color:#f8d7da; color:#721c24; padding:10px 15px; border-radius:6px; margin-bottom:20px; border:1px solid #f5c6cb;">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div style="background-color:#d4edda; color:#155724; padding:10px 15px; border-radius:6px; margin-bottom:20px; border:1px solid #c3e6cb; font-weight:600;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Edit Kegiatan --}}
    <form action="{{ route('kegiatan.update', $kegiatan->id) }}"
          method="POST"
          enctype="multipart/form-data"
          style="background:white; padding:25px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1); border:1px solid #ddd;">
        @csrf
        @method('PUT')

        {{-- 🔥 SIMPAN PAGE & SEARCH --}}
        <input type="hidden" name="page" value="{{ request('page') }}">
        <input type="hidden" name="search" value="{{ request('search') }}">

        {{-- Nama Kegiatan --}}
        <div style="margin-bottom:15px;">
            <label for="nama_kegiatan" style="font-weight:600; display:block; margin-bottom:5px;">
                Nama Kegiatan
            </label>
            <input type="text"
                   id="nama_kegiatan"
                   name="nama_kegiatan"
                   value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}"
                   placeholder="Masukkan nama kegiatan"
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; font-size:1rem;">
        </div>

        {{-- Template Surat --}}
        <div style="margin-bottom:15px;">
            <label for="template_path" style="font-weight:600; display:block; margin-bottom:5px;">
                Ganti Template Surat
            </label>

            <input type="file"
                   id="template_path"
                   name="template_path"
                   accept=".docx,.pdf"
                   style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px; font-size:1rem;">

            <small style="color:#6c757d;">
                Kosongkan jika tidak ingin mengganti template.
            </small>

            @if ($kegiatan->template_path)
                <div style="margin-top:10px;">
                    <span style="font-weight:600;">Template saat ini:</span>
                    <br>
                    <a href="{{ Storage::url($kegiatan->template_path) }}?v={{ $kegiatan->updated_at->timestamp }}"
                       target="_blank"
                       style="color:#007bff; text-decoration:none; font-weight:600;">
                        Lihat Template (versi terbaru)
                    </a>
                </div>
            @endif
        </div>

        {{-- Tombol --}}
        <div style="display:flex; justify-content:flex-end; gap:10px;">
            <a href="{{ route('kegiatan.index', [
                'page' => request('page'),
                'search' => request('search')
            ]) }}"
               style="padding:10px 15px; background:#6c757d; color:white; border-radius:6px; text-decoration:none; font-weight:600;">
                Batal
            </a>

            <button type="submit"
                    style="padding:10px 15px; background:#007bff; color:white; border:none; border-radius:6px; font-weight:600; cursor:pointer;">
                Update Kegiatan
            </button>
        </div>
    </form>
</div>
@endsection
