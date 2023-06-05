@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Daging</h1>
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
                <i class="fa fa-dot-circle-o"></i><a href="{{ route('daging.create') }}"></i>Tambah Data</a>
            </button>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i><a href="pdf"></i>Cetak Data</a>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id Daging</th>
                        <th>Id Pegawai</th>
                        <th>Kode Daging</th>
                        <th>Harga</th>
                        <th>Merk</th>
                        <th>Total</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daging as $dg)
                        <tr>
                            <td>{{ $dg->id_daging}}</td>
                            <td>{{ $dg->id_pegawai}}</td>
                            <td>{{ $dg->kode_daging}}</td>
                            <td>{{ $dg->harga }}</td>
                            <td>{{ $dg->merk}}</td>
                            <td>{{ $dg->total}}</td>
                            <td>{{ $dg->tanggal}}</td>
                            <td>
                            <form action="{{ route('daging.destroy', $dg->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{ route('daging.edit', $dg->id) }}" class="btn btn-warning">Edit</a>
                            </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
        </table>
    
        </div>
@endsection