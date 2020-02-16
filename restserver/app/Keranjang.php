<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pengguna;
use App\Barang;
use App\Penjualan;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $fillable = ['jumlah', 'total', 'barang_id', 'user_id'];

    public function penjualan()
    {
        return $this->hasMany('App\Penjualan', 'keranjang_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Pengguna', 'user_id');
    }

    public function barang()
    {
        return $this->belongsTo('App\Barang', 'barang_id');
    }
}
