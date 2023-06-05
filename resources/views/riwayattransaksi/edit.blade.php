@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> penukaran Poin
    </div>

    <form method="post" action="{{ url('/riwayattransaksi/update/' . $riwayattransaksi->id_riwayattransaksi  ) }}">
        @csrf 
        @method('post') 
        <div class="form-group"><label for="nf-id_riwayattransaksi" class=" form-control-label">Id Transaksi Penjualan</label><input type="text" id="nf-id_riwayattransaksi" value="{{ $data->id_riwayattransaksi}}" name="id_riwayattransaksi" placeholder="id_transaksip.." class="form-control"><span class="help-block">Please enter your ID Riwayat Transaksi</span></div>
        <div class="form-group"><label for="nf-id_pelanggan" class=" form-control-label">Id Riwayat Transaksi</label><input type="text" id="nf-id_pelanggan" value="{{ $data->id_pelanggan}}" name="id_pelanggan" placeholder="id_pelangggan.." class="form-control"><span class="help-block">Please enter your ID Pelanggan</span></div>
        <div class="form-group"><label for="nf-id_konsumen" class=" form-control-label">Id Daging</label><input type="text" id="nf-id_konsumen" value="{{ $data->id_konsumen}}" name="id_konsumen" placeholder="id_konsumen.." class="form-control"><span class="help-block">Please enter your ID Konsumen</span></div>
        <div class="form-group"><label for="nf-jumlah_barang" class=" form-control-label">Jumlah Transaksi</label><input type="text" id="jumlah_barang"  value="{{ $data->jumlah_barang}}"name="jumlah_barang" placeholder="jumlah_barang.." class="form-control"><span class="help-block">Please enter Jumlah Barang </span></div>
        <div class="form-group"><label for="nf-tanggal_transaksi" class=" form-control-label">Tanggal</label><input type="text" id="tanggal_transaksi"  value="{{ $data->tanggal_transaksi}}"name="tanggal_transaksi" placeholder="tanggal_transaksi.." class="form-control"><span class="help-block">Please enter Tanggal</span></div>
        <div class="form-group"><label for="nf-total" class=" form-control-label">Tanggal</label><input type="text" id="total"  value="{{ $data->total}}" name="total" placeholder="total.." class="form-control"><span class="help-block">Please enter total</span></div>
        <div class="form-group"><label for="nf-Metode_bayar" class=" form-control-label">Tanggal</label><input type="text" id="Metode_bayar"  value="{{ $data->Metode_bayar}}" name="Metode_bayar" placeholder="Metode_bayar.." class="form-control"><span class="help-block">Please enter Tanggal</span></div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </form>
 
    <div class="card-body card-block">
        
    </div>
</div>
   
@endsection