@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> penukaran Poin
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('daging.update',[$daging,"daging"]) }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-id_daging" class=" form-control-label">Id Daging</label><input type="text" id="nf-id_daging" value="{{ $daging->id_daging}}" name="id_daging" placeholder="id_daging.." class="form-control"><span class="help-block">Please enter your ID Daging</span></div>
            <div class="form-group"><label for="nf-id_pegawai" class=" form-control-label">Id Pegawai</label><input type="text" id="nf-id_pegawai" value="{{ $daging->id_pegawai}}" name="id_pegawai" placeholder="id_pegawai.." class="form-control"><span class="help-block">Please enter your ID Pegawai</span></div>
            <div class="form-group"><label for="nf-kode_daging" class=" form-control-label">Kode Daging</label><input type="text" id="nf-kode_daging" value="{{ $daging->kode_daging}}"name="kode_daging" placeholder="kode_daging.." class="form-control"><span class="help-block">Please enter your Kode Daging</span></div>
            <div class="form-group"><label for="nf-harga" class=" form-control-label">Harga</label><input type="text" id="harga" value="{{ $daging->harga}}" name="harga" placeholder="harga.." class="form-control"><span class="help-block">Please enter Price</span></div>
            <div class="form-group"><label for="nf-merk" class=" form-control-label">Merk</label><input type="text" id="merk"  value="{{ $daging->merk}}" name="merk" placeholder="merk.." class="form-control"><span class="help-block">Please enter Merk</span></div>
            <div class="form-group"><label for="nf-total" class=" form-control-label">Total</label><input type="text" id="total"  value="{{ $daging->total}}" name="total" placeholder="total.." class="form-control"><span class="help-block">Please enter Total</span></div>
            <div class="form-group"><label for="nf-tanggal" class=" form-control-label">Tanggal</label><input type="text" id="tanggal"  value="{{ $daging->tanggal}}" name="tanggal" placeholder="tanggal.." class="form-control"><span class="help-block">Please enter Tanggal</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>
   
@endsection