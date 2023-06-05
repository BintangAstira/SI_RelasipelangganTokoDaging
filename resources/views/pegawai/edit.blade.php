@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> Pegawai
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('pegawai.update',[$pegawai,"pegawai"]) }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-Nama_Pegawai" class=" form-control-label">Nama Pegawai</label><input type="text" id="nf-Nama_Pegawai"value="{{ $pegawai->Nama_Pegawai}}" name="Nama_Pegawai" placeholder="Nama" class="form-control"><span class="help-block">Please enter your Name</span></div>
            <div class="form-group"><label for="nf-Alamat" class=" form-control-label">Alamat</label><input type="text" id="Alamat"value=" {{ $pegawai->Alamat}}" name="Alamat" placeholder="alamat.." class="form-control"><span class="help-block">Please enter your Alamat</span></div>
            <div class="form-group"><label for="nf-No_Telp" class=" form-control-label">No_telp</label><input type="text" id="No_Telp" value=" {{ $pegawai->No_Telp}}" name="No_Telp" placeholder="No_Telp.." class="form-control"><span class="help-block">Please enter your No_telp</span></div>
            <div class="form-group"><label for="nf-Email" class=" form-control-label">Email</label><input type="text" id="Email" value=" {{ $pegawai->Email}}" name="Email" placeholder="Email" class="form-control"><span class="help-block">Please enter your Email</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>
   
@endsection