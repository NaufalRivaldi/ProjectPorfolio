<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\User;

class AdminController extends Controller
{
	public function index(){
    	return view('admin.login');
    }

    public function dashboard(){
    	$jum_barang = Barang::all()->count();
    	$jum_admin = User::all()->count();

    	return view('admin.dashboard', compact('jum_barang', 'jum_admin'));
    }
}
