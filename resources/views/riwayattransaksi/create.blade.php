@extends('main')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Data </strong> RIWAYAT TRANSAKSI
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('riwayattransaksi.store') }}">
            @csrf 
            @method('post')
            <div class="form-group"><label for="nf-id_riwayattransaksi" class=" form-control-label">Id Riwayat Transaksi</label><input type="text" id="nf-id_riwayattransaksi" name="id_riwayattransaksi" placeholder="id_riwayattransaksi.." class="form-control"><span class="help-block">Please enter your ID Transaksi</span></div>
            <div class="form-group">
                <label for="nf-id_pelanggan" class=" form-control-label">Id Pelanggan</label>
                <select class="form-select" aria-label="Default select example" name="id_pelanggan">
                    <option selected disabled>Open this select menu</option>
                    @foreach ($id_pelanggan as $data)
                    <option value="{{ $data->id_pelanggan }}">{{ $data->id_pelanggan }}</option>
                    @endforeach
                </select>
            <div class="form-group"><label for="nf-id_konsumen" class=" form-control-label">Id Konsumen</label><input type="text" id="nf-id_konsumen" name="id_konsumen" placeholder="id_konsumen.." class="form-control"><span class="help-block">Please enter your ID Konsumen</span></div>
            <div class="form-group"><label for="nf-jumlah_barang" class=" form-control-label">Jumlah Barang</label><input type="text" id="jumlah_barang" name="jumlah_barang" placeholder="jumlah_barang.." class="form-control"><span class="help-block">Please enter Jumlah Barang </span></div>
            <div class="form-group"><label for="nf-tanggal_transaksi" class=" form-control-label">Tanggal</label><input type="text" id="tanggal_transaksi" name="tanggal_transaksi" placeholder="tanggal_transaksi.." class="form-control"><span class="help-block">Please enter Tanggal</span></div>
            <div class="form-group"><label for="nf-total" class=" form-control-label">Total</label><input type="text" id="total" name="total" placeholder="total.." class="form-control"><span class="help-block">Please enter Total</span></div>
            <div class="form-group"><label for="nf-Metode_bayar" class=" form-control-label">Metode Bayar</label><input type="text" id="Metode_bayar" name="Metode_bayar" placeholder="Metode_bayar.." class="form-control"><span class="help-block">Please enter Tanggal</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>



   
@endsection