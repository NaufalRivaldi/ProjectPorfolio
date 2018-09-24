<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBahan extends Model
{
    protected $table = 'kategori_bahan';
    protected $fillable = ['id','nama_kategori'];
}
