<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    use HasFactory;
    protected $table = 'kritik_sarans';
    protected $fillable = ['id_sarankritik','id_pelanggan','id_konsumen','kritik','saran','tanggal','Email'];
}
