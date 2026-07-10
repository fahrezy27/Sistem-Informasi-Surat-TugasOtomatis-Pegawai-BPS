@extends('layouts.app')

@section('content')
<div class="container" style="padding:20px; max-width:600px; margin:auto; font-family:Arial, sans-serif;">
    <h2 style="font-weight:700; font-size:2rem; margin-bottom:20px; color:#333;">Tambah Pegawai</h2>

    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div style="margin-bottom:15px;">
            <label>Nama Pegawai</label>
            <input type="text" name="nama" value="{{ old('nama') }}" required 
                   style="width:100%; padding:10px; border-radius:5px; border:1px solid #ccc;">
        </div>

        <div style="margin-bottom:15px;">
            <label>NIP</label>
            <input type="text" name="nip" value="{{ old('nip') }}" required 
                   style="width:100%; padding:10px; border-radius:5px; border:1px solid #ccc;">
        </div>

        <div style="display:flex; gap:10px;">
            <button type="submit" 
                    style="padding:10px 20px; background:#007bff; color:white; border:none; border-radius:5px;">
                Simpan
            </button>

            <a href="{{ route('pegawai.index') }}" 
               style="padding:10px 20px; background:#6c757d; color:white; border:none; border-radius:5px; text-decoration:none; display:inline-block;">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
