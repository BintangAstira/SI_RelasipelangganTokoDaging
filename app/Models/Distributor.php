<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;


    protected $table = 'distributors';
    protected $fillable = ['Nama_Dis','No_Telp','Jumlah_Stok','Email'];
}
