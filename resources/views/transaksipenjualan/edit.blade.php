@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> Transaksi Penjualan
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('transaksi.update',[$transaksi,"transaksi"]) }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-id_transaksip" class=" form-control-label">Id Transaksi Penjualan</label><input type="text" id="nf-id_transaksip" value="{{ $transaksi->id_transaksip}}" name="id_transaksip" placeholder="id_transaksip.." class="form-control"><span class="help-block">Please enter your ID Transaksi Penjualan</span></div>
            <div class="form-group"><label for="nf-id_riwayattransaksi" class=" form-control-label">Id Poin</label><input type="text" id="nf-id_riwayattransaksi"  value="{{ $transaksi->id_riwayattransaksi}}" name="id_riwayattransaksi" placeholder="id_riwayattransaksi.." class="form-control"><span class="help-block">Please enter your ID Riwayat Transaksi</span></div>
            <div class="form-group"><label for="nf-id_daging" class=" form-control-label">Id Pelanggan</label><input type="text" id="nf-id_daging"  value="{{ $transaksi->id_daging}}" name="id_daging" placeholder="id_daging.." class="form-control"><span class="help-block">Please enter ID Daging</span></div>
            <div class="form-group"><label for="nf-Jumlah_Transaksi" class=" form-control-label">Jumlah Transaksi</label><input type="text" id="Jumlah_Transaksi" value="{{ $transaksi->Jumlah_Transaksi}}" name="Jumlah_Transaksi" placeholder="Jumlah_Transaksi.." class="form-control"><span class="help-block">Please enter Jumlah Transaksi</span></div>
            <div class="form-group"><label for="nf-tanggal" class=" form-control-label">Tanggal</label><input type="text" id="tanggal" value="{{ $transaksi->tanggal}}" name="tanggal" placeholder="tanggal.." class="form-control"><span class="help-block">Please enter Tanggal Transaksi</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>
   
@endsection