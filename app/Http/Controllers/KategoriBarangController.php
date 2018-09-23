<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\KategoriBarang;

class KategoriBarangController extends Controller
{
    public function index(){
    	$kategori = KategoriBarang::orderBy('nama_kategori', 'asc')->paginate(5);

    	return view('admin.kategori_barang.index', compact('kategori'));
    }

    public function create(Request $request){
    	$input = $request->all();	

    	$validator = Validator::make($input, [
    		'nama_kategori' => 'required|string|unique:kategori_barang,nama_kategori'
    	]);

    	if($validator->fails()){
    		return redirect('admin/kategoribarang')->withErrors($validator);
    	}

    	KategoriBarang::create($input);
    	return redirect('admin/kategoribarang');
    }

    public function edit($id){
    	$kategori = KategoriBarang::findOrFail($id);
    	return view('admin.kategori_barang.edit', compact('kategori'));
    }
}
