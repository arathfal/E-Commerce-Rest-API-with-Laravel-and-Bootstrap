<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Key extends Model
{
    protected $fillable = [
        'user', 'key'
    ];
}
