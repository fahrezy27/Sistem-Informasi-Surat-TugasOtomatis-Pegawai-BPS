@extends('layouts.app')

@section('content')

<style>
    body {
        background:#f8fafc;
    }
</style>

<div class="container" style="padding:20px; max-width:650px; margin:auto; font-family:Arial, sans-serif;">

    <!-- CARD -->
    <div style="
        background:white;
        border-radius:12px;
        box-shadow:0 6px 20px rgba(0,0,0,0.08);
        border:1px solid #e5e7eb;
        padding:30px;
    ">

        <h2 style="
            font-weight:700;
            font-size:1.9rem;
            margin-bottom:25px;
            color:#1f2937;
            text-align:center;
        ">
            Edit Data Pegawai
        </h2>

        <!-- Pesan sukses -->
        @if(session('success'))
            <div style="
                background:#dcfce7;
                color:#166534;
                padding:12px 16px;
                border-radius:8px;
                margin-bottom:20px;
                border:1px solid #bbf7d0;
                font-weight:600;
            ">
                {{ session('success') }}
            </div>
        @endif

        <!-- Pesan error -->
        @if ($errors->any())
            <div style="
                background:#fee2e2;
                color:#7f1d1d;
                padding:14px 18px;
                border-radius:8px;
                margin-bottom:22px;
                border:1px solid #fecaca;
                font-weight:600;
            ">
                <ul style="margin:0; padding-left:20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- NAMA -->
            <div style="margin-bottom:20px;">
                <label style="
                    display:block;
                    margin-bottom:6px;
                    font-weight:700;
                    color:#374151;
                ">
                    Nama Pegawai
                </label>
                <input type="text" name="nama"
                       value="{{ old('nama', $pegawai->nama) }}"
                       required
                       style="
                           width:100%;
                           padding:12px 14px;
                           border:1px solid #d1d5db;
                           border-radius:8px;
                           font-size:1rem;
                           background:#f9fafb;
                       ">
            </div>

            <!-- NIP -->
            <div style="margin-bottom:30px;">
                <label style="
                    display:block;
                    margin-bottom:6px;
                    font-weight:700;
                    color:#374151;
                ">
                    NIP
                </label>
                <input type="text" name="nip"
                       value="{{ old('nip', $pegawai->nip) }}"
                       required
                       style="
                           width:100%;
                           padding:12px 14px;
                           border:1px solid #d1d5db;
                           border-radius:8px;
                           font-size:1rem;
                           background:#f9fafb;
                       ">
            </div>

            <!-- BUTTON -->
            <div style="
                display:flex;
                justify-content:flex-end;
                gap:10px;
            ">
                <a href="{{ route('pegawai.index') }}"
                   style="
                       min-width:90px;
                       text-align:center;
                       padding:10px 0;
                       background:#6b7280;
                       color:white;
                       border-radius:8px;
                       text-decoration:none;
                       font-weight:600;
                   ">
                    Batal
                </a>

                <button type="submit"
                        style="
                            min-width:110px;
                            padding:10px 0;
                            background:#2563eb;
                            color:white;
                            border:none;
                            border-radius:8px;
                            font-weight:700;
                            cursor:pointer;
                        ">
                    Simpan
                </button>
            </div>

        </form>
    </div>
</div>

@endsection
