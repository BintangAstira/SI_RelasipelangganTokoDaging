@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Transaksi Penjualan</h1>
            </div>
        </div>
    </div>
   

    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('content')
<div class="content mt-3">
    <div class="content mt-3">
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="card-body">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"><a href="{{ route('transaksi.create') }}"></i>Tambah Data</a>
            </button>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Transaksi Penjualan</th>
                        <th>ID Riwayat Transaksi</th>
                        <th>ID Daging</th>
                        <th>Jumlah Transaksi</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $tp)
                        <tr>
                            <td>{{ $tp->id_transaksip }}</td>
                            <td>{{ $tp->id_riwayattransaksi }}</td>
                            <td>{{ $tp->id_riwayattransaksi }}</td>
                            <td>{{ $tp->id_daging }}</td>
                            <td>{{ $tp->tanggal }}</td>
                            <td>
                                <a href="/transaksi/{{ $tp->id_transaksip }}/edit" class="btn btn-warning">Edit</a>
                                <a href="{{ route('transaksi.destroy', $tp->id_transaksip) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
    
     </div>
@endsection