@extends('main')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Data </strong> Distributor
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('distributor.store') }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-Nama_Dis" class=" form-control-label">Nama Distributor</label><input type="text" id="nf-Nama_Dis" name="Nama_Dis" placeholder="Nama_Dis.." class="form-control"><span class="help-block">Please enter your Distributors Name</span></div>
            <div class="form-group"><label for="nf-No_Telp" class=" form-control-label">No Telepon</label><input type="text" id="No_Telp" name="No_Telp" placeholder="No_Telp.." class="form-control"><span class="help-block">Please enter your No_telp</span></div>
            <div class="form-group"><label for="nf-Jumlah_Stok" class=" form-control-label">Jumlah Stok</label><input type="text" id="Jumlah_Stok" name="Jumlah_Stok" placeholder="Jumlah_Stok.." class="form-control"><span class="help-block">Please enter your Jumlah_Stok</span></div>
            <div class="form-group"><label for="nf-Email" class=" form-control-label">Email</label><input type="text" id="Email" name="Email" placeholder="Email.." class="form-control"><span class="help-block">Please enter your Alamat</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>



   
@endsection