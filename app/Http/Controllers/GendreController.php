<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\gendre;

class gendreController extends Controller

{

     public function awal()
    {
        $semuagendre = gendre::all();
        return view('gendre.awal',compact('semuagendre'));
    }

    public function tambah()
    {
        return view('gendre.tambah');
    }

    // public function simpan(gendrerequest $input)
    // {
   
    // $mahasiswa = new mahasiswa;
    // $mahasiswa->nama = $input->nama;
    // $mahasiswa->nim = $input->nim;
    // $mahasiswa->alamat = $input->alamat;
    // $mahasiswa->pengguna_id = $input->pengguna_id;
    // if($pengguna->mahasiswa()->save($mahasiswa))$this->informasi = 'Berhasil simpan data';
    // }
    // return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
    
    // }

        


    // public function edit($id_gendre)
    // {
    //     $gendre = gendre::find($id_gendre);
    //     return view('gendre.edit')->with(array('gendre'=>$gendre));
    // }

    public function lihat($id_gendre)
    {
        $gendre = gendre::find($id_gendre);
        return view('gendre.lihat')->with(array('gendre'=>$gendre));
    }

//    public function update($id_gendre, gendrerequest $input)
//     {

//     $gendre = gendre::find($id_gendre);
//     $gendre->judul = $input->judul;
//     $gendre->tahun_release = $input->tahun_release;
//     $gendre->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_gendre)
    {
     
			
		$gendre = gendre::find($id_gendre);
        $informasi = $gendre->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('gendre')->with(['informasi'=>$informasi]);
        
    }
}
