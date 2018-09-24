<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'toko';
    protected $fillable = ['id', 'email', 'no_telp', 'sosmed', 'info'];
}
