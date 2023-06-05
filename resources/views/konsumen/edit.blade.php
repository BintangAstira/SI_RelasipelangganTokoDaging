@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> Konsumen
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('konsumen.update',[$konsumen,"konsumen"]) }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-nama" class=" form-control-label">Nama Konsumen</label><input type="text" id="nf-nama"value="{{ $konsumen->nama}}" name="nama" placeholder="Nama" class="form-control"><span class="help-block">Please enter your Name</span></div>
            <div class="form-group"><label for="nf-no_telp" class=" form-control-label">No_telp</label><input type="text" id="no_telp" value=" {{ $konsumen->no_telp}}" name="no_telp" placeholder="no_telp.." class="form-control"><span class="help-block">Please enter your No_telp</span></div>
            <div class="form-group"><label for="nf-alamat" class=" form-control-label">Alamat</label><input type="text" id="alamat"value=" {{ $konsumen->alamat}}" name="alamat" placeholder="alamat.." class="form-control"><span class="help-block">Please enter your Alamat</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>
   
@endsection