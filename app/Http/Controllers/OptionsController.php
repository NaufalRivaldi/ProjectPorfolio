<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Options;

class OptionsController extends Controller
{
    public function index(){
    	$toko = Options::all()->first();

    	return view('admin.options.index', compact('toko'));
    }

    public function create(Request $request){
    	$input = $request->all();

    	$validator = Validator::make($input, [
    		'email' => 'required|email|',
    		'no_telp' => 'sometimes|numeric|digits_between:10,15',
    		'sosmed' => 'sometimes',
    		'info' =>'sometimes'
    	]);

    	if($validator->fails()){
    		return redirect('admin/options')->withErrors($validator);
    	}

    	Options::create($input);
    	return redirect('admin/options');
    }

    public function edit($id){
    	$toko = Options::findOrFail($id);

    	return view('admin.options.edit', compact('toko'));
    }

    public function update($id, Request $request){
    	$toko = Options::findOrFail($id);
    	$input = $request->all();

    	$validator = Validator::make($input, [
    		'email' => 'required|email|',
    		'no_telp' => 'sometimes|numeric|digits_between:10,15',
    		'sosmed' => 'sometimes',
    		'info' =>'sometimes'
    	]);

    	if($validator->fails()){
    		return redirect('admin/options')->withErrors($validator);
    	}

    	$toko->update($input);

    	return redirect('admin/options');
    }
}
