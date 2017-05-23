<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BerandaController extends Controller
{
     public function awal()
    {
              return view('beranda.awal');
    }

     public function simpan(Request $input){
      $berita = new berita;
        ///-----------------------------------------------------------------------------///
        $file = $input->file('gambar');
        $fileName = 'BERITA_'.rand(111111111, 999999999).$file->getClientOriginalName();
        $input->file('gambar')->move("public/images/Gambar/",$fileName);
        ///----------------------------------------------------------------------------/// 
      $berita->gambar = $fileName;
      if($berita->save()) $this->informasi = "Berhasil Posting";
      return redirect('admin-new/berita')->with(['informasi'=>$this->informasi]);

    }
}
