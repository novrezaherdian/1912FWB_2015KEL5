<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\album;

class AlbumController extends Controller

{

     public function awal()
    {
        $semuaalbum = album::all();
        return view('album.awal',compact('semuaalbum'));
    }

    public function tambah()
    {
        return view('album.tambah');
    }

    public function simpan(albumrequest $input)
    {
    
    $album = new album;
    $album->nama_album = $input->nama_album;
    $album->urutan_lagu = $input->urutan_lagu;
    $album->id_rekaman = $input->id_rekaman;
    $mahasiswa->pengguna_id = $input->pengguna_id;
    $informasi=$album->save() ? 'Berhasil simpan data':'gagal simpan data';
        return redirect('album')->with(['informasi'=>$informasi]);
    
    }

        


    public function edit($id_album)
    {
        $album = album::find($id_album);
        return view('album.edit')->with(array('album'=>$album));
    }

    public function lihat($id_album)
    {
        $album = album::find($id_album);
        return view('album.lihat')->with(array('album'=>$album));
    }

//    public function update($id_album, albumrequest $input)
//     {

//     $album = album::find($id_album);
//     $album->judul = $input->judul;
//     $album->tahun_release = $input->tahun_release;
//     $album->save();

       
//     if(!is_null($input->username)) {
//         $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
//         if(!empty($input->password)) $pengguna->password = $input->password;
//     if($pengguna->save()) $this->informasi = 'Berhasil perbaharui data';
//     }else{
//     $this->informasi = 'Berhasil perbaharui data';
// }

//              return redirect('mahasiswa')->with(['informasi'=> $this->informasi]);
//     }

     public function hapus($id_album)
    {
     
			
		$album = album::find($id_album);
        $informasi = $album->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('album')->with(['informasi'=>$informasi]);
        
    }
}
