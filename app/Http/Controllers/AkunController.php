<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\akun;

class akunController extends Controller

{

     public function awal()
    {
        $semuaakun = akun::all();
        return view('akun.awal',compact('semuaakun'));
    }

    public function tambah()
    {
        return view('akun.tambah');
    }

    // public function simpan(akunrequest $input)
    // {
    // $pengguna = new pengguna($input->only('username','password'));
    // if($pengguna->save()){

    // $mahasiswa = new mahasiswa;
    // $mahasiswa->nama = $input->nama;
    // $mahasiswa->nim = $input->nim;
    // $mahasiswa->alamat = $input->alamat;
    // $mahasiswa->pengguna_id = $input->pengguna_id;
    // if($pengguna->mahasiswa()->save($mahasiswa))$this->informasi = 'Berhasil simpan data';
    // }
    // return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
    
    // }

        


    public function edit($id_akun)
    {
        $akun = akun::find($id_akun);
        return view('akun.edit')->with(array('akun'=>$akun));
    }

    public function lihat($id_akun)
    {
        $akun = akun::find($id_akun);
        return view('akun.lihat')->with(array('akun'=>$akun));
    }

//    public function update($id_akun, akunrequest $input)
//     {

//     $akun = akun::find($id_akun);
//     $akun->judul = $input->judul;
//     $akun->tahun_release = $input->tahun_release;
//     $akun->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_akun)
    {
     
			
		$akun = akun::find($id_akun);
        $informasi = $akun->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('akun')->with(['informasi'=>$informasi]);
        
    }
}
