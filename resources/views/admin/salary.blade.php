@extends('layouts.admin')
@section('content')
    @extends('layouts.admin')
@section('content')
    
<h1 class="h3 mb-3"><strong>Daftar</strong> Karyawan</h1>
<div class="card">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Gaji</th>
                        <th>Uang Makan</th>
                        <th>Tunjangan</th>
                        <th>Total Gaji</th>
                        @can('print salary slip')
                        <th>Aksi</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Muhammad Nazar Abdillah</td>
                    <td>Rp. 3.000.000</td>
                    <td>Rp. 500.000</td>
                    <td>Rp. 500.000</td>
                    <td>Rp. 4.000.000</td>
                    <td>
                         @can('edit salary')
                        <a href="" class="btn btn-sm btn-primary"><i data-feather="edit"></i></a>
                        @endcan
                        
                        @can('print salary slip')
                        <button class="btn btn-success btn-sm"><i class="me-1" data-feather="printer"></i> Cetak Slip</button>
                    @endcan
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
@endsection