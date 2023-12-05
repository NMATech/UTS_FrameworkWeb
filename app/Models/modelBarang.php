<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelBarang extends Model
{
    use HasFactory;

    protected $table = 'model_barangs';
    protected $fillable = [
        'kodeBarang',
        'namaBarang',
        'jenisVarian',
        'hargaJual',
        'qty',
        'totalBelanja',
        'diskon',
        'total'
    ];
}