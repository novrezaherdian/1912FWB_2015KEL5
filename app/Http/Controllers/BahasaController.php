<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\bahasa;

class bahasaController extends Controller

{

     public function awal()
    {
        $semuabahasa = bahasa::all();
        return view('bahasa.awal',compact('semuabahasa'));
    }

    public function tambah()
    {
        return view('bahasa.tambah');
    }

    // public function simpan(bahasarequest $input)
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

        


    public function edit($id_bahasa)
    {
        $bahasa = bahasa::find($id_bahasa);
        return view('bahasa.edit')->with(array('bahasa'=>$bahasa));
    }

    public function lihat($id_bahasa)
    {
        $bahasa = bahasa::find($id_bahasa);
        return view('bahasa.lihat')->with(array('bahasa'=>$bahasa));
    }

//    public function update($id_bahasa, bahasarequest $input)
//     {

//     $bahasa = bahasa::find($id_bahasa);
//     $bahasa->judul = $input->judul;
//     $bahasa->tahun_release = $input->tahun_release;
//     $bahasa->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_bahasa)
    {
     
			
		$bahasa = bahasa::find($id_bahasa);
        $informasi = $bahasa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('bahasa')->with(['informasi'=>$informasi]);
        
    }
}
