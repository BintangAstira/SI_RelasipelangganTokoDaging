@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Penukaran Poin</h1>
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
                <i class="fa fa-dot-circle-o"></i><a href="{{ route('penukaranpoin.create') }}"></i>Tambah Data</a>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id Penukaran</th>
                        <th>Id Poin</th>
                        <th>Id Pelanggan</th>
                        <th>Id Konsumen</th>
                        <th>Jumlah Transaksi</th>
                        <th>Total Poin</th>
                        <th>Hadiah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penukaranpoin as $pp)
                        <tr>
                            <td>{{ $pp->id_penukaranpoin }}</td>
                            <td>{{ $pp->id_poin }}</td>
                            <td>{{ $pp->id_pelanggan }}</td>
                            <td>{{ $pp->id_konsumen }}</td>
                            <td>{{ $pp->Jumlah_Transaksi }}</td>
                            <td>{{ $pp->Total_Poin }}</td>
                            <td>{{ $pp->Hadiah}}</td>
                            <td>
                            <form action="{{ route('penukaranpoin.destroy', $pp->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{ route('penukaranpoin.edit', $pp->id) }}" class="btn btn-warning">Edit</a>
                            </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
        </table>
    
        </div>
@endsection