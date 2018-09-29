<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getlogin(){
    	return view('admin.login');
    }

    public function postlogin(Request $request){
    	if(!\Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    		return redirect()->back();
    	}

    	return redirect('admin/dashboard');
    }

    public function logout(){
    	\Auth::logout();

    	return redirect('admin');
    }

    public function getregister(){
    	$user = User::orderBy('name', 'asc')->paginate(5);
    	return view('admin.user.index', compact('user'));
    }

    public function postregister(Request $request){
    	$input = $request->all();

    	$validation = Validator::make($input, [
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required'
    	]);

    	if($validation->fails()){
    		return redirect('admin/user')->withErrors($validation);
    	}

    	$input['password'] = bcrypt($request->password);
    	User::create($input);
    	return redirect('admin/user');
    }

    public function edit($id){
    	$user = User::findOrFail($id);

    	return view('admin.user.edit', compact('user'));
    }

    public function update($id, Request $request){
    	$input = $request->all();
    	$user = User::findOrFail($id);

    	$validation = Validator::make($input, [
    		'name' => 'required',
    		'email' => 'required|email'
    	]);

    	if($validation->fails()){
    		return redirect('admin/user')->withErrors($validation);
    	}

    	$user->update($input);
    	return redirect('admin/user');
    }

    public function delete($id){
    	$user = User::findOrFail($id);
    	$user->delete();

    	return redirect('admin/user');
    }
}
