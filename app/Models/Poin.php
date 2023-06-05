<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    use HasFactory;
    protected $table = 'poins';
    protected $fillable = ['id_pelanggan','id_konsumen','Jumlah_Transaksi','Total_Poin'];
}
