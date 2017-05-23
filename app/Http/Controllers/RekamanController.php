<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\rekaman;

class rekamanController extends Controller

{

     public function awal()
    {
        $semuarekaman = rekaman::all();
        return view('rekaman.awal',compact('semuarekaman'));
    }

    public function tambah()
    {
        return view('rekaman.tambah');
    }

    // public function simpan(rekamanrequest $input)
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

        


    public function edit($id_rekaman)
    {
        $rekaman = rekaman::find($id_rekaman);
        return view('rekaman.edit')->with(array('rekaman'=>$rekaman));
    }

    public function lihat($id_rekaman)
    {
        $rekaman = rekaman::find($id_rekaman);
        return view('rekaman.lihat')->with(array('rekaman'=>$rekaman));
    }

//    public function update($id_rekaman, rekamanrequest $input)
//     {

//     $rekaman = rekaman::find($id_rekaman);
//     $rekaman->judul = $input->judul;
//     $rekaman->tahun_release = $input->tahun_release;
//     $rekaman->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_rekaman)
    {
     
			
		$rekaman = rekaman::find($id_rekaman);
        $informasi = $rekaman->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('rekaman')->with(['informasi'=>$informasi]);
        
    }
}
