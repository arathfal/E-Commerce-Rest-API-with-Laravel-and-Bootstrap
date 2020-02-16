<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Barang;
use App\Keranjang;

class Pengguna extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'pengguna';
    protected $fillable = ['nama', 'email', 'password', 'alamat', 'telepon'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function barang()
    {
        return $this->hasMany('App\Barang', 'user_id', 'id');
    }

    public function keranjang()
    {
        return $this->hasMany('App\Keranjang', 'user_id', 'id');
    }
}
