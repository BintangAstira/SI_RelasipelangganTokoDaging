<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenukaranPoin extends Model
{
    use HasFactory;
    protected $table = 'penukaran_poins';
    protected $fillable = ['id_penukaranpoin','id_poin','id_pelanggan','id_konsumen','Jumlah_Transaksi','Total_Poin','Hadiah'];
}
