<?php

namespace App\Http\Controllers;

use Validator;
use Storage;
use Illuminate\Http\Request;
use App\Barang;
use App\KategoriBarang;

class BarangController extends Controller
{
    public function index(){
    	$kategori = KategoriBarang::all();

    	return view('admin.barang.index', compact('kategori'));
    }

    public function view(){
    	$barang = Barang::orderBy('bahan', 'asc')->paginate(10);

    	return view('admin.barang.view', compact('barang'));
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        $bahan = $request->input('bahan');

        $query = Barang::where('nama_barang', 'LIKE', '%'.$keyword.'%');
        (!empty($bahan)) ? $query->where('bahan', $bahan) : '';

        $barang = $query->paginate(5);
        return view('admin.barang.view', compact('barang'));
    }

    public function show($id){
    	$barang = Barang::findOrFail($id);

    	return view('admin.barang.show', compact('barang'));
    }

    public function create(Request $request){
    	$input = $request->all();

    	$validation = Validator::make($input, [
    		'nama_barang' => 'required',
    		'foto' => 'required|image|max:1000|mimes:jpeg,jpg,bmp,png',
    		'id_kategori_barang' => 'required',
    		'bahan' => 'required'
    	]);

    	if($validation->fails()){
    		return redirect('admin/barang')->withErrors($validation);
    	}

    	if($request->hasFile('foto')){
    		$foto = $request->file('foto');
    		$ext = $foto->getClientOriginalExtension();

    		if($request->file('foto')->isValid()){
    			$foto_name = date('YmdHis'). ".$ext";
    			$upload_path = 'dist/img/fotoupload';
    			$request->file('foto')->move($upload_path, $foto_name);
    			$input['foto'] = $foto_name;
    		}
    	}

    	Barang::create($input);
    	return redirect('admin/barang/view');
    }

    public function edit($id){
    	$kategori = KategoriBarang::all();
    	$barang = Barang::findOrFail($id);

    	return view('admin.barang.edit', compact('kategori', 'barang'));
    }

    public function update($id, Request $request){
    	$input = $request->all();
    	$barang = Barang::findOrFail($id);

    	$validation = Validator::make($input, [
    		'nama_barang' => 'required',
    		'foto' => 'sometimes|image|max:1000|mimes:jpeg,jpg,bmp,png',
    		'id_kategori_barang' => 'required',
    		'bahan' => 'required'
    	]);

    	if($validation->fails()){
    		return redirect('admin/barang/'.$id.'/edit')->withErrors($validation);
    	}

    	if($request->hasFile('foto')){
    		$exist = Storage::disk('foto')->exists($barang->foto);
    		if(isset($barang->foto) && $exist){
    			$delete = Storage::disk('foto')->delete($barang->foto);
    		}

    		$foto = $request->file('foto');
    		$ext = $foto->getClientOriginalExtension();

    		if($request->file('foto')->isValid()){
    			$foto_name = date('YmdHis'). ".$ext";
    			$upload_path = 'dist/img/fotoupload';
    			$request->file('foto')->move($upload_path, $foto_name);
    			$input['foto'] = $foto_name;
    		}
    	}

    	$barang->update($input);
    	return redirect('admin/barang/view');
    }

    public function delete($id){
    	$barang = Barang::findOrFail($id);

    	$exist = Storage::disk('foto')->exists($barang->foto);
		if(isset($barang->foto) && $exist){
			$delete = Storage::disk('foto')->delete($barang->foto);
		}

		$barang->delete();
		return redirect('admin/barang/view');
    }
}
