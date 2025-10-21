@extends('layouts.app')

@section('title', 'Detail Jenis Dokumen')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Jenis Dokumen</h1>
    <a href="{{ route('jenis_dokumen.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-8">
        <!-- Detail Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi Jenis Dokumen</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Nama Jenis Dokumen:</strong>
                    </div>
                    <div class="col-sm-9">
                        {{ $jenisDokumen->nama }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Deskripsi:</strong>
                    </div>
                    <div class="col-sm-9">
                        {{ $jenisDokumen->deskripsi ?? 'Tidak ada deskripsi' }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Status:</strong>
                    </div>
                    <div class="col-sm-9">
                        @if($jenisDokumen->status == 'aktif')
                            <span class="badge badge-success">Aktif</span>
                        @else
                            <span class="badge badge-danger">Tidak Aktif</span>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Tanggal Dibuat:</strong>
                    </div>
                    <div class="col-sm-9">
                        {{ $jenisDokumen->created_at->format('d/m/Y H:i') }}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Terakhir Diupdate:</strong>
                    </div>
                    <div class="col-sm-9">
                        {{ $jenisDokumen->updated_at->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Action Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Aksi</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('jenis_dokumen.edit', $jenisDokumen->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit Jenis Dokumen
                    </a>
                    <a href="{{ route('jenis_dokumen.index') }}" class="btn btn-secondary">
                        <i class="fas fa-list"></i> Lihat Semua
                    </a>
                    <form action="{{ route('jenis_dokumen.destroy', $jenisDokumen->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100" 
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Info Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
            </div>
            <div class="card-body">
                <p class="text-muted small">
                    <i class="fas fa-info-circle"></i> 
                    Jenis dokumen ini dapat digunakan untuk mengkategorikan dokumen-dokumen yang ada dalam sistem.
                </p>
                <p class="text-muted small">
                    <i class="fas fa-exclamation-triangle"></i> 
                    Hati-hati saat menghapus jenis dokumen, pastikan tidak ada dokumen yang menggunakan jenis ini.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

