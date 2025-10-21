@extends('layouts.app')

@section('title', 'Ketua')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Ketua</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Ketua</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Ketua</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Jabatan</th>
                                <th>Periode</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Jabatan</th>
                                <th>Periode</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. Ahmad Wijaya</td>
                                <td>ahmad@example.com</td>
                                <td>081234567890</td>
                                <td>Ketua Umum</td>
                                <td>2023-2025</td>
                                <td><span class="badge badge-success">Aktif</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Prof. Siti Nurhaliza</td>
                                <td>siti@example.com</td>
                                <td>081234567891</td>
                                <td>Wakil Ketua</td>
                                <td>2023-2025</td>
                                <td><span class="badge badge-success">Aktif</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. Muhammad Ali</td>
                                <td>ali@example.com</td>
                                <td>081234567892</td>
                                <td>Sekretaris</td>
                                <td>2023-2025</td>
                                <td><span class="badge badge-warning">Tidak Aktif</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Page level plugins -->
<script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('sb-admin/js/demo/datatables-demo.js') }}"></script>
@endpush

@push('styles')
<!-- Custom styles for this page -->
<link href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush