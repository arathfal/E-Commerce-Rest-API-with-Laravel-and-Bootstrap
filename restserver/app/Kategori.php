<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama'];

    public function barang()
    {
        return $this->hasMany('App\Barang', 'kategori_id', 'id');
    }
}
