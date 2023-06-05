<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daging extends Model
{
    use HasFactory;
    protected $table = 'dagings';
    protected $fillable = ['id_daging','','Jumlah_Stok','Email'];

}
