<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\list_pengguna;

class list_penggunaController extends Controller

{

     public function awal()
    {
        $semualist_pengguna = list_pengguna::all();
        return view('list_pengguna.awal',compact('semualist_pengguna'));
    }

    public function tambah()
    {
        return view('list_pengguna.tambah');
    }

    // public function simpan(list_penggunarequest $input)
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

        


    public function edit($id_list_pengguna)
    {
        $list_pengguna = list_pengguna::find($id_list_pengguna);
        return view('list_pengguna.edit')->with(array('list_pengguna'=>$list_pengguna));
    }

    public function lihat($id_list_pengguna)
    {
        $list_pengguna = list_pengguna::find($id_list_pengguna);
        return view('list_pengguna.lihat')->with(array('list_pengguna'=>$list_pengguna));
    }

//    public function update($id_list_pengguna, list_penggunarequest $input)
//     {

//     $list_pengguna = list_pengguna::find($id_list_pengguna);
//     $list_pengguna->judul = $input->judul;
//     $list_pengguna->tahun_release = $input->tahun_release;
//     $list_pengguna->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_list_pengguna)
    {
     
			
		$list_pengguna = list_pengguna::find($id_list_pengguna);
        $informasi = $list_pengguna->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('list_pengguna')->with(['informasi'=>$informasi]);
        
    }
}
