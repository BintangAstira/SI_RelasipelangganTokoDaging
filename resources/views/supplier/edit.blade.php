@extends('main')
@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="card">
    <div class="card-header">
        <strong>Data </strong> Supplier
    </div>
    <div class="card-body card-block">
        <form method="post" action="{{ route('supplier.update',[$supplier,"supplier"]) }}">
            @csrf 
            @method('post') 
            <div class="form-group"><label for="nf-Nama_Supplier" class=" form-control-label">Nama Supplier</label><input type="text" id="nf-Nama_Supplier"  value="{{ $supplier->Nama_Supplier}}" name="Nama_Supplier" placeholder="Nama_Supplier.." class="form-control"><span class="help-block">Please enter your Supplier Name</span></div>
            <div class="form-group"><label for="nf-No_Telp" class=" form-control-label">No_telp</label><input type="text" id="No_Telp"value="{{ $supplier->No_Telp}}" name="No_Telp" placeholder="No_Telp.." class="form-control"><span class="help-block">Please enter your No_telp</span></div>
            <div class="form-group"><label for="nf-Perusahaan" class=" form-control-label">Perusahaan</label><input type="text" id="Perusahaan"value="{{ $supplier->Perusahaan}}" name="Perusahaan" placeholder="Perusahaan.." class="form-control"><span class="help-block">Please enter your Perusahaan</span></div>
            <div class="form-group"><label for="nf-Alamat" class=" form-control-label">Alamat</label><input type="text" id="Alamat" value="{{ $supplier->Alamat}}" name="Alamat" placeholder="Alamat.." class="form-control"><span class="help-block">Please enter your Alamat</span></div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>
</div>
   
@endsection