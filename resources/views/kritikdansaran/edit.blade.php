@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> penukaran Poin
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('kritiksaran.update',[$kritiksaran,"kritiksaran"]) }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-id_kritiksaran" class=" form-control-label">Id Penukaran Poin</label><input type="text" id="nf-id_kritiksaran" value="{{ $kritiksaran->id_kritiksaran}}" name="id_kritiksaran" placeholder="id_kritiksaran.." class="form-control"><span class="help-block">Please enter your ID Penukaran Poin</span></div>
            <div class="form-group"><label for="nf-id_konsumen" class=" form-control-label">Id Poin</label><input type="text" id="nf-id_pelanggan"  value="{{ $kritiksaran->id_pelanggan}}" name="id_pelanggan" placeholder="id_pelanggan.." class="form-control"><span class="help-block">Please enter your ID Poin</span></div>
            <div class="form-group"><label for="nf-id_konsumen" class=" form-control-label">Id Pelanggan</label><input type="text" id="nf-id_konsumen"  value="{{ $kritiksaran->id_konsumen}}" name="id_konsumen" placeholder="id_konsumen.." class="form-control"><span class="help-block">Please enter your ID Pelanggan</span></div>
            <div class="form-group"><label for="nf-kritik" class=" form-control-label">Id Konsumen</label><input type="text" id="kritik" value="{{ $kritiksaran->kritik}}" name="kritik" placeholder="id_konsumen.." class="form-control"><span class="help-block">Please enter your ID Konsumen</span></div>
            <div class="form-group"><label for="nf-saran" class=" form-control-label">saran</label><input type="text" id="saran" value="{{ $kritiksaran->saran}}" name="saran" placeholder="saran.." class="form-control"><span class="help-block">Please enter Jumlah Transaksi</span></div>
            <div class="form-group"><label for="nf-tanggal" class=" form-control-label">Total Poin</label><input type="text" id="tanggal"  value="{{ $kritiksaran->tanggal}}" name="tanggal" placeholder="tanggal.." class="form-control"><span class="help-block">Please enter your Total Poin</span></div>
            <div class="form-group"><label for="nf-Email" class=" form-control-label">Hadiah</label><input type="text" id="Email" value="{{ $kritiksaran->Email}}" name="Email" placeholder="Email.." class="form-control"><span class="help-block">Please enter your Email</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>
   
@endsection