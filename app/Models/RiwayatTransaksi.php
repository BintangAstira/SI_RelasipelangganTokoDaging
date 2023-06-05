<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatTransaksi extends Model
{
    use HasFactory;
    protected $table = 'riwayat_transaksis';

    protected $primaryKey = 'id_riwayattransaksi';
    protected $fillable = ['id_riwayattransaksi','id_pelanggan','id_konsumen','jumlah_barang','tanggal_transaksi','total','Metode_bayar'];
    
}
