@extends('main')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Data </strong> Pelanggan
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('pelanggan.store') }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-nama" class=" form-control-label">Nama Pelanggans</label><input type="text" id="nf-nama" name="nama" placeholder="Nama" class="form-control"><span class="help-block">Please enter your Name</span></div>
            <div class="form-group"><label for="nf-alamat" class=" form-control-label">Alamat</label><input type="text" id="alamat" name="alamat" placeholder="alamat.." class="form-control"><span class="help-block">Please enter your Alamat</span></div>
            <div class="form-group"><label for="nf-no_telp" class=" form-control-label">No_telp</label><input type="text" id="no_telp" name="no_telp" placeholder="no_telp.." class="form-control"><span class="help-block">Please enter your No_telp</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>



    
@endsection