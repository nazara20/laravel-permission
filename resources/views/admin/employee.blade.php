@extends('layouts.admin')
@section('content')
    
<h1 class="h3 mb-3"><strong>Daftar</strong> Karyawan</h1>
<div class="card">
    <div class="card-body">
        @can('create employee')
            
        
        <a href="" class="btn btn-primary"><i class="me-1" data-feather="plus"></i>Tambah</a>
@endcan
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Tanggal Lahir</th>
                         @can('edit employee|delete employee')
                        <th>Aksi</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Muhammad Nazar Abdillah</td>
                    <td>Laki-laki</td>
                    <td>Banjarmasin, 20 November 2000</td>
                    <td>
                         @can('edit employee')
                        <a href="" class="btn btn-sm btn-primary"><i data-feather="edit"></i></a>
                        @endcan
                         @can('delete employee')
                        <a href="" class="btn btn-sm btn-danger"><i data-feather="trash"></i></a>
                        @endcan
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection