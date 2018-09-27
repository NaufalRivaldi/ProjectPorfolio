<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
    	'id',
    	'nama_barang',
        'foto',
    	'id_kategori_barang',
    	'bahan',
    	'jumlah',
    	'harga',
    	'keterangan'
    ];

    public function barang(){
    	return $this->belongsTo('App\KategoriBarang', 'id_kategori_barang');
    }
}
