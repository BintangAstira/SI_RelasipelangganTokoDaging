@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Konsumen</h1>
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
                <i class="fa fa-dot-circle-o"><a href="{{ route('konsumen.create') }}"></i> Tambah Data</a>
            </button>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i><a href="konsumenpdf"></i>Cetak Data</a>
            </button>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Konsumen</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konsumen as $k)
                        <tr>
                            <td>{{ $k->nama}}</td>
                            <td>{{ $k->no_telp }}</td>
                            <td>{{ $k->alamat }}</td>
                            <td>
                                
                               
                                <a href="{{ route('konsumen.edit', $k->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('konsumen.destroy', $k->id) }}" method="POST">  
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