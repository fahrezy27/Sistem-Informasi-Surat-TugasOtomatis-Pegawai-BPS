@extends('layouts.app')

@section('content')

<style>
    body {
        background:#f8fafc;
    }

    .card-box {
        background:white;
        border-radius:14px;
        box-shadow:0 8px 24px rgba(0,0,0,0.08);
        border:1px solid #e5e7eb;
        overflow:hidden;
    }

    .table-header {
        background:#2563eb;
        color:white;
        padding:14px 18px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        font-weight:700;
        font-size:1.1rem;
    }

    .btn-add {
        background:white;
        color:#2563eb;
        padding:8px 14px;
        border-radius:8px;
        text-decoration:none;
        font-weight:700;
        font-size:0.95rem;
    }

    .btn-action {
        min-width:80px;
        text-align:center;
        padding:6px 0;
        border-radius:7px;
        font-weight:600;
        text-decoration:none;
        display:inline-block;
        font-size:0.9rem;
    }

    .btn-edit {
        background:#f59e0b;
        color:white;
    }

    .btn-delete {
        background:#dc2626;
        color:white;
        border:none;
        cursor:pointer;
    }

    table thead {
        background:#f1f5f9;
        color:#374151;
        font-size:0.95rem;
    }

    table tbody tr:hover {
        background:#f8fafc;
    }

    nav.custom-pagination {
        margin:25px 0;
        text-align:center;
        display:flex;
        flex-direction:column;
        gap:8px;
        align-items:center;
    }

    .pagination-info {
        font-size:0.9rem;
        color:#4b5563;
        font-weight:600;
    }

    .pagination-numbers {
        display:flex;
        gap:6px;
        flex-wrap:wrap;
        justify-content:center;
    }

    .pagination-numbers a,
    .pagination-numbers span {
        padding:7px 11px;
        border:1px solid #d1d5db;
        border-radius:7px;
        text-decoration:none;
        min-width:34px;
        background:white;
        color:#2563eb;
        text-align:center;
        font-size:0.9rem;
    }

    .pagination-numbers a:hover {
        background:#e5e7eb;
    }

    .pagination-numbers .active-page {
        background:#2563eb;
        color:white;
        border-color:#2563eb;
        font-weight:700;
    }
</style>

<div class="container" style="padding:20px; max-width:1100px; margin:auto; font-family:Arial, sans-serif;">

    <h2 style="
        font-weight:800;
        font-size:2rem;
        margin-bottom:22px;
        color:#1f2937;
    ">
        Data Kegiatan
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

    <div class="card-box">

        <!-- HEADER -->
        <div class="table-header">
            <span>Daftar Kegiatan</span>
            <a href="{{ route('kegiatan.create') }}" class="btn-add">
                + Tambah Kegiatan
            </a>
        </div>

        <!-- SEARCH -->
        <div style="padding:14px 18px; border-bottom:1px solid #e5e7eb;">
            <form action="{{ route('kegiatan.index') }}" method="GET"
                  style="display:flex; gap:8px; max-width:420px;">
                <input type="text" name="search" placeholder="Cari nama kegiatan..."
                       value="{{ request('search') }}"
                       style="
                           flex:1;
                           padding:9px 12px;
                           border:1px solid #d1d5db;
                           border-radius:8px;
                           font-size:0.95rem;
                       ">
                <button type="submit"
                        style="
                            padding:9px 14px;
                            background:#2563eb;
                            color:white;
                            border:none;
                            border-radius:8px;
                            font-weight:600;
                            cursor:pointer;
                        ">
                    Cari
                </button>
            </form>
        </div>

        <!-- TABLE -->
        <table style="width:100%; border-collapse:collapse; font-size:0.95rem;">
            <thead>
                <tr>
                    <th style="padding:14px;">No</th>
                    <th style="padding:14px;">Nama Kegiatan</th>
                    <!-- <th style="padding:14px;">Template Surat</th> -->
                    <th style="padding:14px;">Dibuat</th>
                    <th style="padding:14px;">Diupdate</th>
                    <th style="padding:14px; text-align:center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kegiatan as $index => $k)
                <tr>
                    <td style="padding:14px;">
                        {{ $kegiatan->firstItem() + $index }}
                    </td>
                    <td style="padding:14px; font-weight:600;">
                        {{ $k->nama_kegiatan }}
                    </td>
                    <!-- <td style="padding:14px;">
                        @if($k->template_path)
                            <a href="{{ asset('storage/' . $k->template_path) }}"
                               target="_blank"
                               style="color:#2563eb; font-weight:600;">
                                Lihat Template
                            </a>
                        @else
                            <span style="color:#9ca3af;">Belum ada</span>
                        @endif
                    </td> -->
                    <td style="padding:14px;">
                        {{ optional($k->created_at)->format('d-m-Y H:i') ?? '-' }}
                    </td>
                    <td style="padding:14px;">
                        {{ optional($k->updated_at)->format('d-m-Y H:i') ?? '-' }}
                    </td>
                    <td style="padding:14px; text-align:center;">
                        <a href="{{ route('kegiatan.edit', $k->id) }}"
                           class="btn-action btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('kegiatan.destroy', $k->id) }}"
                              method="POST"
                              class="form-hapus"
                              style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="btn-action btn-delete">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="padding:22px; text-align:center; color:#6b7280;">
                        Belum ada data kegiatan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <!-- PAGINATION -->
        <nav class="custom-pagination">

            <div class="pagination-info">
                Showing {{ $kegiatan->firstItem() }} to {{ $kegiatan->lastItem() }}
                of {{ $kegiatan->total() }} results
            </div>

            <div class="pagination-numbers">

                @php
                    $current = $kegiatan->currentPage();
                    $last = $kegiatan->lastPage();
                    $start = max(1, $current - 2);
                    $end = min($last, $current + 2);
                @endphp

                @if ($start > 1)
                    <a href="{{ $kegiatan->url(1) }}">1</a>
                    @if ($start > 2)
                        <span>...</span>
                    @endif
                @endif

                @for ($i = $start; $i <= $end; $i++)
                    @if ($i == $current)
                        <span class="active-page">{{ $i }}</span>
                    @else
                        <a href="{{ $kegiatan->url($i) }}">{{ $i }}</a>
                    @endif
                @endfor

                @if ($end < $last)
                    @if ($end < $last - 1)
                        <span>...</span>
                    @endif
                    <a href="{{ $kegiatan->url($last) }}">{{ $last }}</a>
                @endif

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
            title: 'Hapus Kegiatan?',
            text: 'Data yang dihapus tidak dapat dikembalikan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
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
