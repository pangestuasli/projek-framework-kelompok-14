@extends('layouts.app')

@section('title', 'Edit Jenis Dokumen')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Jenis Dokumen</h1>
    <a href="{{ route('jenis_dokumen.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-8">
        <!-- Form Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Jenis Dokumen</h6>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('jenis_dokumen.update', $jenisDokumen->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Jenis Dokumen <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                               id="nama" name="nama" value="{{ old('nama', $jenisDokumen->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                  id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $jenisDokumen->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select class="form-control @error('status') is-invalid @enderror" 
                                id="status" name="status" required>
                            <option value="">Pilih Status</option>
                            <option value="aktif" {{ old('status', $jenisDokumen->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="tidak_aktif" {{ old('status', $jenisDokumen->status) == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Update
                        </button>
                        <a href="{{ route('jenis_dokumen.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <!-- Info Card -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
            </div>
            <div class="card-body">
                <p class="text-muted">
                    <strong>Nama Jenis Dokumen:</strong> Masukkan nama jenis dokumen yang akan diubah.
                </p>
                <p class="text-muted">
                    <strong>Deskripsi:</strong> Tambahkan deskripsi untuk memberikan informasi lebih detail tentang jenis dokumen.
                </p>
                <p class="text-muted">
                    <strong>Status:</strong> Pilih status aktif atau tidak aktif untuk jenis dokumen.
                </p>
                <hr>
                <p class="text-muted small">
                    <i class="fas fa-info-circle"></i> 
                    Field yang bertanda <span class="text-danger">*</span> wajib diisi.
                </p>
                <hr>
                <p class="text-muted small">
                    <strong>Dibuat:</strong> {{ $jenisDokumen->created_at->format('d/m/Y H:i') }}<br>
                    <strong>Diupdate:</strong> {{ $jenisDokumen->updated_at->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

