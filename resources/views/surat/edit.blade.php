@extends('layouts.app')

@section('title', 'Edit Surat')

@section('content')
<div class="container" style="padding:20px; max-width:700px; margin:auto; font-family:Arial, sans-serif;">

    <h2 style="font-weight:700; font-size:2rem; margin-bottom:20px; color:#333;">
        Edit Surat
    </h2>

    {{-- Error --}}
    @if ($errors->any())
        <div style="background-color:#f8d7da; color:#721c24; padding:10px 15px; border-radius:6px; margin-bottom:20px;">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('surat.update', $surat->id) }}" method="POST"
          style="background:white; padding:25px; border-radius:10px; box-shadow:0 2px 10px rgba(0,0,0,0.1); border:1px solid #ddd;">
        @csrf
        @method('PUT')

        {{-- Nomor Surat --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; display:block; margin-bottom:5px;">
                Nomor Surat
            </label>
            <input type="text" name="nomor_surat"
                   value="{{ old('nomor_surat', $surat->nomor_surat) }}"
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Kegiatan --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; display:block; margin-bottom:5px;">
                Pilih Kegiatan
            </label>
            <select name="kegiatan_id"
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
                <option value="">-- Pilih Kegiatan --</option>
                @foreach($kegiatan as $item)
                    <option value="{{ $item->id }}"
                        {{ old('kegiatan_id', $surat->kegiatan_id) == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_kegiatan }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- ✅ PEGAWAI (MULTI SELECT) --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; display:block; margin-bottom:5px;">
                Pegawai (boleh lebih dari satu)
            </label>

            @php
                $selectedPegawai = old(
                    'pegawai_ids',
                    $surat->pegawai->pluck('id')->toArray()
                );
            @endphp

            <select name="pegawai_ids[]" multiple
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px; height:160px;">
                @foreach($pegawai as $p)
                    <option value="{{ $p->id }}"
                        {{ in_array($p->id, $selectedPegawai) ? 'selected' : '' }}>
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
            <label style="font-weight:600; display:block; margin-bottom:5px;">
                Tanggal Mulai
            </label>
            <input type="date" name="tanggal_mulai"
                   value="{{ old('tanggal_mulai', $surat->tanggal_mulai?->format('Y-m-d')) }}"
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Tanggal Selesai --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; display:block; margin-bottom:5px;">
                Tanggal Selesai
            </label>
            <input type="date" name="tanggal_selesai"
                   value="{{ old('tanggal_selesai', $surat->tanggal_selesai?->format('Y-m-d')) }}"
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Tanggal Surat --}}
        <div style="margin-bottom:15px;">
            <label style="font-weight:600; display:block; margin-bottom:5px;">
                Tanggal Surat
            </label>
            <input type="date" name="tanggal_surat"
                   value="{{ old('tanggal_surat', $surat->tanggal_surat?->format('Y-m-d')) }}"
                   style="width:100%; padding:10px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Tombol --}}
        <div style="display:flex; justify-content:flex-end; gap:10px;">
            <a href="{{ route('surat.index') }}"
               style="padding:10px 15px; background:#6c757d; color:white; border-radius:6px; text-decoration:none;">
                Batal
            </a>
            <button type="submit"
                    style="padding:10px 15px; background:#007bff; color:white; border:none; border-radius:6px;">
                Update Surat
            </button>
        </div>
    </form>
</div>
@endsection
