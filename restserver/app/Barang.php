<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Keranjang;
use App\Kategori;
use App\Pengguna;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['nama', 'deskripsi', 'harga', 'gambar', 'kategori_id', 'user_id'];

    public function keranjang()
    {
        return $this->hasMany('App\Keranjang', 'barang_id', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Pengguna', 'user_id');
    }
}
