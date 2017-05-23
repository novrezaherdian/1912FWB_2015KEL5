<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\lagu;

class LaguController extends Controller

{

     public function awal()
    {
        $semuaLagu = lagu::all();
        return view('lagu.awal',compact('semuaLagu'));
    }

    public function tambah()
    {
        return view('lagu.tambah');
    }

    // public function simpan(lagurequest $input)
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

        


    public function edit($id_lagu)
    {
        $lagu = Lagu::find($id_lagu);
        return view('lagu.edit')->with(array('lagu'=>$lagu));
    }

    public function lihat($id_lagu)
    {
        $lagu = Lagu::find($id_lagu);
        return view('lagu.lihat')->with(array('lagu'=>$lagu));
    }

//    public function update($id_lagu, lagurequest $input)
//     {

//     $lagu = Lagu::find($id_lagu);
//     $lagu->judul = $input->judul;
//     $lagu->tahun_release = $input->tahun_release;
//     $lagu->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_lagu)
    {
     
			
		$lagu = Lagu::find($id_lagu);
        $informasi = $lagu->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('lagu')->with(['informasi'=>$informasi]);
        
    }
}
