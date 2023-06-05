@extends('main')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Data </strong> Poin
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('poin.store') }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-id_pelanggan" class=" form-control-label">Id Pelanggan</label><input type="text" id="nf-id_pelanggan" name="id_pelanggan" placeholder="Id Pelanggan.." class="form-control"><span class="help-block">Please enter your ID Pelanggan</span></div>
            <div class="form-group"><label for="nf-id_konsumen" class=" form-control-label">Id Konsumen</label><input type="text" id="id_konsumen" name="id_konsumen" placeholder="id_konsumen.." class="form-control"><span class="help-block">Please enter your ID Konsumen</span></div>
            <div class="form-group"><label for="nf-Jumlah_Transaksi" class=" form-control-label">Jumlah Transaksi</label><input type="text" id="Jumlah_Transaksi" name="Jumlah_Transaksi" placeholder="Jumlah_Transaksi.." class="form-control"><span class="help-block">Please enter Jumlah Transaksi</span></div>
            <div class="form-group"><label for="nf-Total_Poin" class=" form-control-label">Total Poin</label><input type="text" id="Total_Poin" name="Total_Poin" placeholder="Total_Poin.." class="form-control"><span class="help-block">Please enter your Total Poin</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>



   
@endsection