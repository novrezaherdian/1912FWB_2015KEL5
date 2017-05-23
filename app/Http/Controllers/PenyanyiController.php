<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\penyanyi;

class penyanyiController extends Controller

{

     public function awal()
    {
        $semuapenyanyi = penyanyi::all();
        return view('penyanyi.awal',compact('semuapenyanyi'));
    }

    public function tambah()
    {
        return view('penyanyi.tambah');
    }

    // public function simpan(penyanyirequest $input)
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

        


    public function edit($id_penyanyi)
    {
        $penyanyi = penyanyi::find($id_penyanyi);
        return view('penyanyi.edit')->with(array('penyanyi'=>$penyanyi));
    }

    public function lihat($id_penyanyi)
    {
        $penyanyi = penyanyi::find($id_penyanyi);
        return view('penyanyi.lihat')->with(array('penyanyi'=>$penyanyi));
    }

//    public function update($id_penyanyi, penyanyirequest $input)
//     {

//     $penyanyi = penyanyi::find($id_penyanyi);
//     $penyanyi->judul = $input->judul;
//     $penyanyi->tahun_release = $input->tahun_release;
//     $penyanyi->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_penyanyi)
    {
     
			
		$penyanyi = penyanyi::find($id_penyanyi);
        $informasi = $penyanyi->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('penyanyi')->with(['informasi'=>$informasi]);
        
    }
}
