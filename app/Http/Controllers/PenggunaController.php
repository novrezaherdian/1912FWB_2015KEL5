<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pengguna;

class penggunaController extends Controller

{

     public function awal()
    {
        $semuapengguna = pengguna::all();
        return view('pengguna.awal',compact('semuapengguna'));
    }

    public function tambah()
    {
        return view('pengguna.tambah');
    }

    // public function simpan(penggunarequest $input)
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

        


    public function edit($id_pengguna)
    {
        $pengguna = pengguna::find($id_pengguna);
        return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
    }

    public function lihat($id_pengguna)
    {
        $pengguna = pengguna::find($id_pengguna);
        return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
    }

//    public function update($id_pengguna, penggunarequest $input)
//     {

//     $pengguna = pengguna::find($id_pengguna);
//     $pengguna->judul = $input->judul;
//     $pengguna->tahun_release = $input->tahun_release;
//     $pengguna->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_pengguna)
    {
     
			
		$pengguna = pengguna::find($id_pengguna);
        $informasi = $pengguna->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
        
    }
}
