<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\KategoriBahan;

class KategoriBahanController extends Controller
{
    public function index(){
    	$kategori = KategoriBahan::orderBy('nama_kategori', 'asc')->paginate(5);

    	return view('admin.kategori_bahan.index', compact('kategori'));
    }

    public function create(Request $request){
    	$input = $request->all();	

    	$validator = Validator::make($input, [
    		'nama_kategori' => 'required|string|unique:kategori_bahan,nama_kategori'
    	]);

    	if($validator->fails()){
    		return redirect('admin/kategoribahan')->withErrors($validator);
    	}

    	KategoriBahan::create($input);
    	return redirect('admin/kategoribahan');
    }

    public function edit($id){
    	$kategori = KategoriBahan::findOrFail($id);
    	return view('admin.kategori_bahan.edit', compact('kategori'));
    }

    public function update($id, Request $request){
    	$input = $request->all();
    	$kategori = KategoriBahan::findOrFail($id);

    	$validator = Validator::make($input, [
    		'nama_kategori' => 'required|string|unique:kategori_bahan,nama_kategori'
    	]);

    	if($validator->fails()){
    		return redirect('admin/kategoribahan')->withErrors($validator);
    	}

    	$kategori->update($input);
    	return redirect('admin/kategoribahan');
    }

    public function delete($id){
    	$kategori = KategoriBahan::findOrFail($id);
    	$kategori->delete();
    	return redirect('admin/kategoribahan');
    }
}
