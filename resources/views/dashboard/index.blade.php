@extends('layouts.app')

@section('title', 'Dashboard | SINTAS')

@section('content')
<h2 style="color:#023e8a; font-weight:600; margin-bottom:20px;">📊 Ringkasan Data</h2>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
  <div style="background:white; border-radius:12px; padding:25px; text-align:center; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
    <h3>👥 Pegawai</h3>
    <p style="font-size:1.8rem; font-weight:700; color:#0077b6;">{{ $totalPegawai }}</p>
  </div>
  <div style="background:white; border-radius:12px; padding:25px; text-align:center; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
    <h3>📄 Surat Tugas</h3>
    <p style="font-size:1.8rem; font-weight:700; color:#0077b6;">{{ $totalSurat }}</p>
  </div>
  <div style="background:white; border-radius:12px; padding:25px; text-align:center; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
    <h3>📅 Kegiatan</h3>
    <p style="font-size:1.8rem; font-weight:700; color:#0077b6;">{{ $totalKegiatan }}</p>
  </div>
</div>
@endsection
