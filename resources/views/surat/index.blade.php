@extends('layouts.app')

@section('content')
<div class="container" style="padding:25px; max-width:1100px; margin:auto; font-family:Arial, sans-serif;">

    <h2 style="font-weight:700; font-size:2.2rem; margin-bottom:25px; color:#2c3e50;">
        Data Surat
    </h2>

    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ session('success') }}',
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        </script>
    @endif

    <div style="
        border-radius:12px;
        overflow:hidden;
        box-shadow:0 4px 16px rgba(0,0,0,0.1);
        border:1px solid #e5e7eb;
        background:white;
    ">

        <div style="
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:14px 18px;
            background:linear-gradient(90deg,#2563eb,#1e40af);
            color:white;
            font-weight:600;
            font-size:1.1rem;
        ">
            <span>Daftar Surat</span>
            <a href="{{ route('surat.create') }}"
               style="
                   padding:8px 14px;
                   background:white;
                   color:#1e40af;
                   border-radius:6px;
                   text-decoration:none;
                   font-weight:700;
                   font-size:0.95rem;
               ">
               + Tambah Surat
            </a>
        </div>

        <table style="width:100%; border-collapse:collapse; font-size:1rem;">
            <thead style="background:#f8fafc; color:#334155;">
                <tr>
                    <th style="padding:14px;">No</th>
                    <th style="padding:14px;">Nomor Surat</th>
                    <th style="padding:14px;">Kegiatan</th>
                    <th style="padding:14px;">Tanggal Kegiatan</th>
                    <th style="padding:14px;">Pegawai</th>
                    <th style="padding:14px; text-align:center;">Download</th>
                    <th style="padding:14px;">Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse($surat as $index => $s)
                <tr onmouseover="this.style.background='#f1f5f9'"
                    onmouseout="this.style.background='white'">

                    <td style="padding:14px;">
                        {{ $surat->firstItem() + $index }}
                    </td>

                    <td style="padding:14px; font-weight:600;">
                        {{ $s->nomor_surat }}
                    </td>

                    <td style="padding:14px;">
                        {{ $s->kegiatan->nama_kegiatan ?? '-' }}
                    </td>

                    <td style="padding:14px;">
                        {{ $s->tanggal_mulai?->format('d-m-Y') }}
                        <span style="color:#64748b;"> s/d </span>
                        {{ $s->tanggal_selesai?->format('d-m-Y') }}
                    </td>

                    <td style="padding:14px;">
                        @if($s->pegawai->count())
                            {{ $s->pegawai->pluck('nama')->implode(', ') }}
                        @else
                            <span style="color:#94a3b8;">-</span>
                        @endif
                    </td>

                    <td style="padding:14px; text-align:center;">
                        <a href="{{ route('surat.generateWord', $s->id) }}"
                           style="
                               padding:6px 12px;
                               background:#0ea5e9;
                               color:white;
                               border-radius:6px;
                               text-decoration:none;
                               font-weight:600;
                               font-size:0.9rem;
                           ">
                            Word
                        </a>
                    </td>

                    <td style="padding:14px; white-space:nowrap;">
                        <a href="{{ route('surat.edit', $s->id) }}"
                           style="
                               display:inline-block;
                               min-width:80px;
                               text-align:center;
                               padding:6px 0;
                               background:#f59e0b;
                               color:white;
                               border-radius:6px;
                               text-decoration:none;
                               font-weight:600;
                               font-size:0.9rem;
                               margin-right:6px;
                           ">
                            Edit
                        </a>

                        <form action="{{ route('surat.destroy', $s->id) }}"
                              method="POST"
                              class="form-hapus"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    style="
                                        min-width:80px;
                                        padding:6px 0;
                                        background:#ef4444;
                                        color:white;
                                        border:none;
                                        border-radius:6px;
                                        cursor:pointer;
                                        font-weight:600;
                                        font-size:0.9rem;
                                    ">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7"
                        style="text-align:center; padding:30px; color:#64748b; font-style:italic;">
                        Belum ada data surat
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <!-- PAGINATION -->
        <div style="padding:15px; background:#f8fafc;">
            {{ $surat->links() }}
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.querySelectorAll('.form-hapus').forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Hapus Surat?',
            text: 'Data yang dihapus tidak dapat dikembalikan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#64748b',
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>
@endsection
