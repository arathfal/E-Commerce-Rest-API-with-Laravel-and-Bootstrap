<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Keranjang;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['tanggal', 'keranjang_id'];

    public function keranjang()
    {
        return $this->belongsTo('App\Keranjang', 'keranjang_id');
    }
}
