@extends('layouts.app')

@section('content')

<style>
    /* ===== GLOBAL ===== */
    body {
        background:#f8fafc;
    }

    /* ===== PAGINATION ===== */
    nav.custom-pagination {
        margin: 25px 0;
        text-align: center;
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .pagination-info {
        font-size: 0.9rem;
        font-weight: 500;
        color: #555;
    }

    .pagination-numbers {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination-numbers a,
    .pagination-numbers span {
        padding: 6px 12px;
        font-size: 0.9rem;
        border: 1px solid #d0d7de;
        border-radius: 6px;
        min-width: 36px;
        background: white;
        color: #2563eb;
        text-align: center;
        text-decoration: none;
        font-weight: 600;
    }

    .pagination-numbers a:hover {
        background: #e5e7eb;
    }

    .pagination-numbers .active-page {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }
</style>

<div class="container" style="padding:20px; max-width:1100px; margin:auto; font-family:Arial, sans-serif;">

    <h2 style="font-weight:700; font-size:2rem; margin-bottom:20px; color:#1f2937;">
        Data Pegawai
    </h2>

    <!-- Notifikasi sukses SweetAlert -->
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

    <!-- CARD -->
    <div style="
        border-radius:10px;
        overflow:hidden;
        box-shadow:0 4px 15px rgba(0,0,0,0.08);
        border:1px solid #e5e7eb;
        background:white;
    ">

        <!-- HEADER -->
        <div style="
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:14px 18px;
            background:#2563eb;
            color:white;
            font-weight:700;
            font-size:1.1rem;
        ">
            <span>Daftar Pegawai</span>
            <a href="{{ route('pegawai.create') }}"
               style="
                   padding:8px 14px;
                   background:white;
                   color:#2563eb;
                   border-radius:6px;
                   text-decoration:none;
                   font-weight:700;
                   font-size:0.95rem;
               ">
               + Tambah Pegawai
            </a>
        </div>

        <!-- SEARCH -->
        <div style="padding:14px 18px; border-bottom:1px solid #e5e7eb;">
            <form action="{{ route('pegawai.index') }}" method="GET"
                  style="display:flex; align-items:center; max-width:420px;">
                <input type="text" name="search"
                       placeholder="Cari nama atau NIP..."
                       value="{{ request('search') }}"
                       style="
                           flex:1;
                           padding:8px 12px;
                           border:1px solid #d1d5db;
                           border-radius:6px;
                           margin-right:6px;
                       ">
                <button type="submit"
                        style="
                            padding:8px 14px;
                            background:#2563eb;
                            color:white;
                            border:none;
                            border-radius:6px;
                            font-weight:600;
                            cursor:pointer;
                        ">
                    Cari
                </button>
            </form>
        </div>

        <!-- TABLE -->
        <table style="width:100%; border-collapse:collapse; font-size:0.95rem;">
            <thead style="background:#f1f5f9; color:#374151;">
                <tr>
                    <th style="padding:14px; border-bottom:2px solid #e5e7eb;">No</th>
                    <th style="padding:14px; border-bottom:2px solid #e5e7eb;">Nama</th>
                    <th style="padding:14px; border-bottom:2px solid #e5e7eb;">NIP</th>
                    <th style="padding:14px; border-bottom:2px solid #e5e7eb;">Dibuat</th>
                    <th style="padding:14px; border-bottom:2px solid #e5e7eb;">Di Update</th>
                    <th style="padding:14px; border-bottom:2px solid #e5e7eb; text-align:center;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($pegawai as $index => $p)
                <tr style="transition:0.2s;">
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $pegawai->firstItem() + $index }}
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $p->nama }}
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $p->nip }}
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $p->created_at?->format('d-m-Y H:i') ?? '-' }}
                    </td>
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb;">
                        {{ $p->updated_at?->format('d-m-Y H:i') ?? '-' }}
                    </td>

                    <!-- AKSI -->
                    <td style="padding:14px; border-bottom:1px solid #e5e7eb; text-align:center; white-space:nowrap;">

                        <a href="{{ route('pegawai.edit', $p->id) }}"
                           style="
                               display:inline-block;
                               min-width:80px;
                               padding:6px 0;
                               background:#f59e0b;
                               color:white;
                               border-radius:6px;
                               text-decoration:none;
                               font-weight:600;
                               font-size:0.85rem;
                               margin-right:6px;
                           ">
                            Edit
                        </a>

                        <form action="{{ route('pegawai.destroy', $p->id) }}"
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
                                        font-size:0.85rem;
                                    ">
                                Hapus
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center; padding:25px; color:#6b7280;">
                        Belum ada data pegawai
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- PAGINATION -->
        <nav class="custom-pagination">
            <div class="pagination-info">
                Showing {{ $pegawai->firstItem() }} to {{ $pegawai->lastItem() }}
                of {{ $pegawai->total() }} results
            </div>

            <div class="pagination-numbers">
                @for ($i = 1; $i <= $pegawai->lastPage(); $i++)
                    @if ($i == $pegawai->currentPage())
                        <span class="active-page">{{ $i }}</span>
                    @else
                        <a href="{{ $pegawai->url($i) }}">{{ $i }}</a>
                    @endif
                @endfor
            </div>
        </nav>

    </div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Konfirmasi Hapus -->
<script>
document.querySelectorAll('.form-hapus').forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Hapus Pegawai?',
            text: 'Data yang dihapus tidak dapat dikembalikan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ef4444',
            cancelButtonColor: '#6b7280',
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
