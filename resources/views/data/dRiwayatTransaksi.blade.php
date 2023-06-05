@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Riwayat Transaksi</h1>
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
                <i class="fa fa-dot-circle-o"><a href="{{ route('riwayattransaksi.create') }}"></i>Tambah Data</a>
            </button>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i><a href="riwayattransaksipdf"></i>Cetak Data</a>
            </button>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Riwayat Transaksi</th>
                        <th>ID Pelanggan</th>
                        <th>ID Konsumen</th>
                        <th>Jumlah Barang</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Barang</th>
                        <th>Metode Bayar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayattransaksi as $rt)
                        <tr>
                            <td>{{ $rt->id_riwayattransaksi }}</td>
                            <td>{{ $rt->id_pelanggan }}</td>
                            <td>{{ $rt->id_konsumen }}</td>
                            <td>{{ $rt->jumlah_barang}}</td>
                            <td>{{ $rt->tanggal_transaksi}}</td>
                            <td>{{ $rt->total}}</td>
                            <td>{{ $rt->Metode_bayar}}</td>
                            <td>
                                <a href="/riwayattransaksi/{{ $rt->id_riwayattransaksi }}/edit" class="btn btn-warning">Edit</a>
                                <form action="{{ route('riwayattransaksi.destroy', $rt->id_riwayattransaksi) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
    
     </div>
@endsection