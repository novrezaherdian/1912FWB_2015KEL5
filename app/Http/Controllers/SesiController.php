<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\akun;
use Illuminate\Auth\SessionGuard;
use Auth;

class SesiController extends Controller
{
    public function index()
	{
		return view('master');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}else
		return view('login');
	}
	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$akun = akun::where($input->only('username','password'))->first();
		if(! is_null($akun)){
			Auth::login($akun);
			if(Auth::check())
				return redirect('/home')->with('informasi',"Selamat datang ".Auth::user()->username);
		}
		return redirect('/login')->withErrors(['Pengguna tidak ditemukan']);
	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
			return redirect('/login')->withErrors(['Silahkan login untuk masuk ke sistem']);
		}else{
			return redirect('/login')->withErrors(['Silahkan login terlebih dahulu']);
		}
		
	}
}
