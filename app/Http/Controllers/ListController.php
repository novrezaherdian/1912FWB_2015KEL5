<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\list;

class listController extends Controller

{

     public function awal()
    {
        $semualist = list::all();
        return view('list.awal',compact('semualist'));
    }

    public function tambah()
    {
        return view('list.tambah');
    }

    // public function simpan(listrequest $input)
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

        


    public function edit($id_list)
    {
        $list = list::find($id_list);
        return view('list.edit')->with(array('list'=>$list));
    }

    public function lihat($id_list)
    {
        $list = list::find($id_list);
        return view('list.lihat')->with(array('list'=>$list));
    }

//    public function update($id_list, listrequest $input)
//     {

//     $list = list::find($id_list);
//     $list->judul = $input->judul;
//     $list->tahun_release = $input->tahun_release;
//     $list->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_list)
    {
     
			
		$list = list::find($id_list);
        $informasi = $list->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('list')->with(['informasi'=>$informasi]);
        
    }
}
