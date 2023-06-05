@extends('main')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Data </strong> Kritik Dan Saran
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('kritiksaran.store') }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-id_kritiksaran" class=" form-control-label">Id Kritik Saran</label><input type="text" id="nf-id_kritiksaran" name="id_kritiksaran" placeholder="id_kritiksaran.." class="form-control"><span class="help-block">Please enter your ID </span></div>
            <div class="form-group"><label for="nf-id_pelanggan" class=" form-control-label">Id Pelanggan</label><input type="text" id="nf-id_pelanggan" name="id_pelanggan" placeholder="id pelanggan.." class="form-control"><span class="help-block">Please enter your ID</span></div>
            <div class="form-group"><label for="nf-id_konsumen" class=" form-control-label">Id Konsumen</label><input type="text" id="nf-id_konsumen" name="id_konsumen" placeholder="id_konsumen.." class="form-control"><span class="help-block">Please enter your ID </span></div>
            <div class="form-group"><label for="nf-kritik" class=" form-control-label">Kritik</label><input type="text" id="kritik" name="kritik" placeholder="kritik.." class="form-control"><span class="help-block">Please enter your ID Konsumen</span></div>
            <div class="form-group"><label for="nf-saran" class=" form-control-label">Saran</label><input type="text" id="saran" name="saran" placeholder="saran.." class="form-control"><span class="help-block">Please enter Jumlah Transaksi</span></div>
            <div class="form-group"><label for="nf-tanggal" class=" form-control-label">Tanggal</label><input type="text" id="tanggal" name="tanggal" placeholder="tanggal.." class="form-control"><span class="help-block">Please enter your Total Poin</span></div>
            <div class="form-group"><label for="nf-Email" class=" form-control-label">Email</label><input type="text" id="Email" name="Email" placeholder="Email.." class="form-control"><span class="help-block">Please enter your Email</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>



   
@endsection