@extends('layouts.admin')
@section('content')
    @extends('layouts.admin')
@section('content')
    
<h1 class="h3 mb-3"><strong>Daftar</strong> Karyawan</h1>
<div class="card">
    <div class="card-body">
@can('print present')
        <a href="" class="btn btn-primary"><i class="me-1" data-feather="printer"></i>Cetak Absen</a>
@endcan
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>Muhammad Nazar Abdillah</td>
                    <td>07.30 WITA</td>
                    <td>17.30 WITA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
@endsection