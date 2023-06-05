@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Kritik dan Saran</h1>
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
                <i class="fa fa-dot-circle-o"></i><a href="{{ route('kritiksaran.create') }}"></i>Tambah Data</a>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id Kritik Saran</th>
                        <th>Id Pelanggan</th>
                        <th>Id Konsumen</th>
                        <th>Saran</th>
                        <th>Kritik</th>
                        <th>Tanggal</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kritiksaran as $ks)
                        <tr>
                            <td>{{ $ks->id_kritiksaran}}</td>
                            <td>{{ $ks->id_pelanggan}}</td>
                            <td>{{ $ks->id_konsumen}}</td>
                            <td>{{ $ks->saran }}</td>
                            <td>{{ $ks->kritik}}</td>
                            <td>{{ $ks->tanggal}}</td>
                            <td>{{ $ks->Email}}</td>
                            <td>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                <a href="{{ route('kritiksaran.edit', $ks->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('kritiksaran.destroy', $ks->id) }}" method="POST">  
                            </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
        </table>
    
        </div>
@endsection