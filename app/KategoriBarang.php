<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table = 'kategori_barang';
    protected $fillable = ['id','nama_kategori'];

    public function barang(){
    	return $this->hasMany('App\Barang', 'id_kategori_barang');
    }
}
